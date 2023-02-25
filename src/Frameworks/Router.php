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
            $taxController->set(); //getting the initial form
        } elseif ($path === '/form' && $method === 'POST') {
            $taxController->add(); //adding data
        } elseif ($path === '/data_entered' && $method === 'GET') {
            $taxController->showResponse(); //show what happened with the data entered
        } elseif ($path === '/data_entered' && $method === 'POST') {
            $taxController->countTotal(); //counting total
        } elseif ($path === '/total' && $method === 'GET') {
            $totalController->list();  //showing the final list
        } elseif ($path === '/total' && $method === 'POST') {
            $totalController->pay(); //paying
        }
    }
}