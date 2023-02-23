<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Controllers;

use Exam_PHP_OOP\Repositories\TaxRepository;

class TotalController
{
    public function __construct(private TaxRepository $taxRepository)
    {
    }

    public function list()
    {
        $taxList = $this->taxRepository->getAll();

        require __DIR__ . "/../../views/total.php";
    }

    public function pay()
    {

    }

}