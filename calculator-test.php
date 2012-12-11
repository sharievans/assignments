<?php

require_once "calculator.php";


//I'm going o start with the function test provided in class

function test ($assertion, $message = null)
{
    echo (@assert ($assertion)? 'pass!' : 'fail!') . $message . "/n";
}


// Failing test: Does the class Calculator exist?
$calculator = new Calculator;


//Failing test for first addition attempt function add does't exist
test ($calculator-> add (1,1) == 2, '1 + 1 == 2');

//Testing the next equations
test ($calculator-> add (1,0) == 1, '1 + 0 == 1');
test ($calculator-> add (0,0) == 0, '0 + 0 == 0');
test ($calculator-> add (1,-1) == 0, '1 + -1 == 0');
test ($calculator-> add (0,-1) == -1, '0 + -1 == -1');
test ($calculator-> add (-1,-1) == -2, '-1 + -1 == -2');

//I want to apply some false statements
test ($calculator-> add (1,0) == 2, '1 + 0 == 2');


//Failing test for subtraction
test ($calculator-> sub (1,1) == 0, '1 - 1 == 0');