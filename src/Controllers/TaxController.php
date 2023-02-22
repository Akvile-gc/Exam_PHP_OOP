<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Controllers;

class TaxController
{

    public function set()
    {
        require __DIR__ . "/../../views/form.php";
    }

    public function add()
    {
//        if ($input == '') {
//            return [];
//        }
//
//        $inputItems = explode(',', $input);
//        $enteredData = [];
//
//        foreach ($inputItems as $item) {
//            $unsortedData = explode(':', $item);
//            $id = (int)$unsortedData[0];
//            $quantity = (int)$unsortedData[1];
//            $newData = new DataEntered($id, $quantity);
//            $enteredData[] = $newData;
//        }
//
//        return $enteredData;

    }

    public function countTotal()
    {

    }



}