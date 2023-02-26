<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Models;

class Tax
{
    public function __construct(
        private string $kw,
        private string $tariff,
        private string $type,
        private string $month)
    {
    }
    public function getKw():string {
        return $this->kw;
    }

    public function getTariff():string {
        return $this->tariff;
    }

    public function getType():string {
        return $this->type;
    }

    public function getMonth():string {
        return $this->month;
    }
}