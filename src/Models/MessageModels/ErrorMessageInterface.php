<?php

declare(strict_types=1);

namespace Exam_PHP_OOP\Models\MessageModels;

interface ErrorMessageInterface
{
    public function overdue():void;
    public function tooEarly():void;

    public function wrongData():void;
}
