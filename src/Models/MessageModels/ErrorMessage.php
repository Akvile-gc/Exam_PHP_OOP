<?php

declare(strict_types=1);

namespace Exam_PHP_OOP\Models\MessageModels;

class ErrorMessage implements ErrorMessageInterface
{
        public function overdue():void
    {
        echo 'Your bills are overdue for more than a month' . PHP_EOL;
    }

    public function tooEarly():void
    {
        echo 'You are paying your bills too early' . PHP_EOL;
    }

    public function wrongData(): void
    {
        echo 'Please enter correct data' . PHP_EOL;
    }
//    public function logMessage(string $message)
//    {
//        parent::logMessage($message);
//        file_put_contents('./../DataBase/tax_data.json', $message . PHP_EOL, FILE_APPEND);
//    }
}
