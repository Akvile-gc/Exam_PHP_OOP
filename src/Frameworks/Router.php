<?php
declare(strict_types=1);

namespace Exam_PHP_OOP\Frameworks;

use Exam_PHP_OOP\Controllers\TaxController;
use Exam_PHP_OOP\Controllers\TotalController;

class Router
{

    public function __construct(protected DIContainer $container)
    {
    }

    public function process(string $path, string $method)
    {
        $taxController = $this->container->get(TaxController::class);
        $totalController = $this->container->get(TotalController::class);

        if($path === '/form' && $method === 'GET'){
            $taxController->set();
        } elseif ($path === '/form' && $method === 'POST') {
            $taxController->add();
        } elseif ($path === '/form' && $method === 'POST') {
            $taxController->countTotal();
        } elseif ($path === '/total' && $method === 'GET') {
            $totalController->list();
        } elseif ($path === '/total' && $method === 'POST') {
            $totalController->pay();
        }
    }
}