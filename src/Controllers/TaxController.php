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
        require __DIR__ . "/../../views/form.php";
    }

    public function add()
    {
        $currentMonth = (int)date('n');
        $validator = $this->container->get(DateValidatorController::class);

        try {
            $validator->validate($currentMonth);
        } catch (TaxException $exception){
            echo $exception->getMessage();
        }

        require __DIR__ . "/../../views/data_entered.php";
    }

    public function countTotal()
    {

    }



}