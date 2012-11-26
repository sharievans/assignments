<?php

/**
 * Testing module for the Matrix dojo
 * Specs are:
 * Imagine a hallway with 50 closed doors on each side
 * Go to the end of the hall, back up and open every door
 * Go back and close even numbered doors
 * Go back and every third door, open if closed, close if open
 * Continue to 100 times
 * Tell me the state of all doors
 * 
*/

require_once "matrix_production_code.php";


// I want to test the exisistence of the doors

if ( is_array ( $doors ))
echo 'There are doors';


// I want to know how many doors we have

if (array ($doors <=100))
echo 'There are 100 doors';

// Identify the closed doors
// At this point there should be no closed doors, test did not fail. why?

// if (array ($doors == 'closed'))
// echo 'These are all the closed doors';

// I removed the previous code above and made an assertion. Assertion failed.

// assert ($doors == 'closed');

function test_even_doors ($doors)
{
    if (( $a % 2 ) == 'closed')
    echo $a . 'is closed';
}

