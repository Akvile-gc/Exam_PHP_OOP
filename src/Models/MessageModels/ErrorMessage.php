<?php

declare(strict_types=1);

namespace Exam_PHP_OOP\Models\MessageModels;

class ErrorMessage implements ErrorMessageInterface
{
        public function overdue():void
    {
        echo 'Jūs vėluojate sumokėti mokesčius daugiau nei 1 mėn.' . PHP_EOL;
    }

    public function tooEarly():void
    {
        echo 'Jūs mokate mokesčius per anksti' . PHP_EOL;
    }

    public function wrongData(): void
    {
        echo 'Prašome suvesti teisingus duomenis' . PHP_EOL;
    }
}
