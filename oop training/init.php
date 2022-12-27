<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
    function autoloader($classname){
        $lastSlash = strpos($classname, '\\')+1;
        $classname = substr($classname, $lastSlash);
        $directory = str_replace('\\', '/', $classname);
        $filename = __DIR__ . '/' . $directory . '.php';
        require_once $filename;
    }

    spl_autoload_register('autoloader');

    function checkIfValid(Customer $customer, $books){
        return $customer->getAmountToBorrow() >= count($books)
    }

$book = new Book("13091380913", "Joyce Meyer", "Love of God", 10);
$first_customer = new Customer(1, "Joshua", "Adufe", "obanijesuadufe8@gmail.com");

var_dump(checkIfValid($first_customer, $book));
/*var_dump($first_customer->getEmail());
var_dump($first_customer->setEmail('obakl'));
var_dump($first_customer->getEmail());
*/
?>