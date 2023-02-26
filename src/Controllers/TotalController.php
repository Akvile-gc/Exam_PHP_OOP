<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Controllers;

use Exam_PHP_OOP\Controllers\DataControllers\DataEntryController;
use Exam_PHP_OOP\Controllers\DataControllers\DataExtractionController;
use Exam_PHP_OOP\Frameworks\DIContainer;
use Exam_PHP_OOP\Repositories\TaxRepository;

class TotalController
{
    public function __construct(private DIContainer $container)
    {
    }

//    public function list()
//    {
//        $extraction = $this->dataExtractionController;
//        $data = $extraction->extractData('D:\CodeAcademy\Back End\PHP\Exam_PHP_OOP\src\DataBase\tax_data.json');
////        $data = $extraction->extractData(__DIR__ . '/../DataBase/tax_data.json');
//
//        foreach ($data as $entry){
//            if (count($entry) === 4){
//                $taxList = $this->taxRepository->getAll();
//            }
//        }
//
//        require __DIR__ . "/../../views/total.php";
//    }

    public function pay()
    {
        $tax = $this->container->get(TaxRepository::class);
        $taxList = $tax->getAll();

        foreach ($taxList as $key=>$entry){
            $paidEntry = $entry;
            $paidEntry['payment'] = 'APMOKETA';
            unset($entry);
            unset($taxList[$key]);
            $taxList[] = $paidEntry;
        }

        $encoding = $this->container->get(DataEntryController::class);

        $encoding->enterData('D:\CodeAcademy\Back End\PHP\Exam_PHP_OOP\src\DataBase\tax_data.json', $taxList);

        require __DIR__ . "/../../views/paid.php";
    }
}