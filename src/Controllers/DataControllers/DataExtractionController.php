<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Controllers\DataControllers;

class DataExtractionController
{
    public function extractData(string $location):array
    {
        $extractedData = file_get_contents($location);
        return json_decode($extractedData, true);
    }
}