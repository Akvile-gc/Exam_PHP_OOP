<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Repositories;

class TaxRepository
{
    public function getAll():array
    {

        return [
            new Car('0', 'Toyota', 'Yaris', 2002),
            new Car('1', 'Kia', 'Red', 2020),
            new Car('2', 'VW', 'Jeta', 2015),
        ];
    }
}