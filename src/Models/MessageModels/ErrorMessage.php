<?php

declare(strict_types=1);

namespace Exam_PHP_OOP\Models\MessageModels;

class ErrorMessage implements ErrorMessageInterface
{
        public function overdue():string
    {
        return 'Jūs vėluojate sumokėti mokesčius daugiau nei 1 mėn.';
    }

    public function tooEarly():string
    {
        return 'Jūs mokate mokesčius per anksti';
    }

    public function wrongData(): string
    {
        return 'Prašome suvesti teisingus duomenis';
    }
}
