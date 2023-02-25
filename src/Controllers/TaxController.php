<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Controllers;

use Exam_PHP_OOP\Controllers\DataControllers\DateValidatorController;
use Exam_PHP_OOP\Frameworks\DIContainer;
use Exam_PHP_OOP\Models\TaxException;

class TaxController
{
    public function __construct(public DIContainer $container)
    {
    }

    public function set()
    {
        require __DIR__ . "/../../views/form.php";  //getting initial form to fill in
    }

    public function add()
    {
        $currentMonth = (int)date('n');  //getting current month
        $validator = $this->container->get(DateValidatorController::class);

        try {
            $validator->validate($currentMonth);  //checking if the month entered can be paid for
            $message = 'Jūsų duomenys pridėti';
        } catch (TaxException $exception){
//            echo $exception->getMessage();
            $errorMessage = $exception->getMessage();
        }
            require __DIR__ . "/../../views/data_entered.php";
    }

    public function showResponse()
    {
        require __DIR__ . "/../../views/data_entered.php";
    }
    public function countTotal()
    {

    }



}