<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Controllers\DataControllers;

use Exam_PHP_OOP\Frameworks\DIContainer;
use Exam_PHP_OOP\Models\MessageModels\ErrorMessage;
use Exam_PHP_OOP\Models\Tax;
use Exam_PHP_OOP\Models\TaxException;

class DateValidatorController
{
    public function __construct(public DIContainer $container)
    {
    }

    public function validate(int $currentMonth)
    {
        $dataEntered = $_POST['data_entered'];
        $exception = $this->container->get(TaxException::class);
        $errorMessage = $this->container->get(ErrorMessage::class);
        $encoding = $this->container->get(DataEntryController::class);

        $taxDataArray = explode(';', $dataEntered);
        $enteredData = [];

        foreach ($taxDataArray as $t) {

            $month = (int)$taxDataArray[3];

            if ($currentMonth - $month == 1) {
                $kw = (int)$taxDataArray[0];
                $tariff = (int)$taxDataArray[1];
                $type = $taxDataArray[2];
                $tax = new Tax($kw, $tariff, $type, $month);
                $enteredData[] = $tax;
                $encoding->enterData(__DIR__ . '/../DataBase/tax_data.json', $enteredData);

//                echo 'Your data has been added';
                return $enteredData;
            } elseif ($currentMonth - $month > 1) {
                throw $exception($errorMessage->overdue());
            } elseif ($currentMonth - $month < 1) {
                throw $exception($errorMessage->tooEarly());
            } else {
                throw $exception($errorMessage->wrongData());
            }
        }
    }
}

var_dump($_POST['data_entered']);