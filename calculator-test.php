<?php

require_once "calculator.php";


//I'm going o start with the function test provided in class

function test ($assertion, $message = null)
{
    echo (@assert ($assertion)? 'pass!' : 'fail!') . $message . "/n";
}


// Failing test: Does the class Calculator exist?
$calculator = new Calculator;