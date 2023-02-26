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
//        $exception = $this->container->get(TaxException::class);  //get my own Exception - for some reason not working
        $errorMessage = $this->container->get(ErrorMessage::class); //getting the error messages
        $encoding = $this->container->get(DataEntryController::class);  //preparing data for putting into the file
        $decoding = $this->container->get(DataExtractionController::class);
        $location = 'D:\CodeAcademy\Back End\PHP\Exam_PHP_OOP\src\DataBase\tax_data.json';

        $taxDataArray = explode(';', $dataEntered);  //separate the string entered

        foreach ($taxDataArray as $t) { // actions for each of exploded string's values

            $month = $taxDataArray[3];
            $monthInt = (int)$month; //turning month's value into int

            if ($currentMonth - $monthInt === 1) {  //good condition, can move on to the next steps
                $kw = $taxDataArray[0];
                $tariff = $taxDataArray[1];
                $type = $taxDataArray[2];
                $tax = new Tax($kw, $tariff, $type, $month);
                $enteredData = [
                    'kw'=>$tax->getKw(),
                    'tariff'=>$tax->getTariff(),
                    'type'=>$tax->getType(),
                    'month'=>$tax->getMonth()
                    ];

                $data = $decoding->extractData($location); //getting existing data

                $data[] = $enteredData; //inserting new tax data to the file

                $encoding->enterData($location, $data); //encoding new data
                return $enteredData;
            } elseif ($currentMonth - $monthInt > 1) {
                throw new \Exception($errorMessage->overdue());
//                throw $exception($errorMessage->overdue());  //not working, why?
            } elseif ($currentMonth - $monthInt < 1) {
                throw new \Exception($errorMessage->tooEarly());
//                throw $exception($errorMessage->tooEarly()); //not working, why?
            } else {
                throw new \Exception($errorMessage->wrongData());
//                throw $exception($errorMessage->wrongData()); //not working, why?
            }
        }
    }
}