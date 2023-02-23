<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Models;

class Tax
{
    public function __construct(
        private float $kw,
        private float $tariff,
        private string $type,
        private int $month)
    {
    }

    public function getKw():float {
        return $this->kw;
    }

    public function getTariff():float {
        return $this->tariff;
    }

    public function getType():string {
        return $this->type;
    }

    public function getMonth():int {
        return $this->month;
    }
}