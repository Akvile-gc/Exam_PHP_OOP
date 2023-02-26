<?php

declare(strict_types=1);

namespace Exam_PHP_OOP\Models\MessageModels;

interface ErrorMessageInterface
{
    public function overdue():string;
    public function tooEarly():string;

    public function wrongData():string;
}
