<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Controllers;

use Exam_PHP_OOP\Controllers\DataControllers\DataEntryController;
use Exam_PHP_OOP\Controllers\DataControllers\DataExtractionController;
use Exam_PHP_OOP\Repositories\TaxRepository;

class TotalController
{
    public function __construct(
        private TaxRepository $taxRepository,
        private DataExtractionController $dataExtractionController,
        private DataEntryController $dataEntryController)
    {
    }

    public function list()
    {
        $extraction = $this->dataExtractionController;
        $data = $extraction->extractData(__DIR__ . '/../DataBase/tax_data.json');

        foreach ($data as $entry){
            if (count($entry) === 4){
                $taxList = $this->taxRepository->getAll();
            }
        }

        require __DIR__ . "/../../views/total.php";
    }

    public function pay()
    {
        $extraction = $this->dataExtractionController;
        $data = $extraction->extractData(__DIR__ . '/../DataBase/tax_data.json');

        foreach ($data as $entry){
            $entry['payment'] = 'APMOKĖTA';
        }

        $encoding = $this->dataEntryController;

        $encoding->enterData(__DIR__ . '/../DataBase/tax_data.json', $data);

//        require __DIR__ . "/../../views/total.php";

    }

}