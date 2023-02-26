<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Controllers\DataControllers;

class DataExtractionController
{
    public function extractData(string $location):array
    {
        $extractedData = file_get_contents($location);
        if ($extractedData){
            $extracted = json_decode($extractedData, true);
        } else {
            $extracted = [];
        }
        return $extracted;
    }
}