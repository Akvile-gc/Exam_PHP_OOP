<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Repositories;

use Exam_PHP_OOP\Controllers\DataControllers\DataExtractionController;
use Exam_PHP_OOP\Frameworks\DIContainer;

class TaxRepository
{
    public function __construct(public DIContainer $container)
    {
    }

    public function getAll():array
    {
        $extractedData = $this->container->get(DataExtractionController::class);
        return $extractedData->extractData(__DIR__ . '/../DataBase/tax_data.json');
    }
}