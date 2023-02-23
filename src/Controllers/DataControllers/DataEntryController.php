<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Controllers\DataControllers;

class DataEntryController
{    public function enterData(string $location, array $data):void
    {
        $serializedData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($location, $serializedData, FILE_APPEND);
    }
}