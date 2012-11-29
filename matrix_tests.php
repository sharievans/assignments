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

// I want to test if the doors exist.

if (is_array ( $doors ))
echo 'There are doors in this array';

// failing test
// added production code and still failing


//This test creates a loop
function test_doors ( $doors)
{
    for ($a = 1; $a <= 100; $a++)
        {
            assert ($doors [$a] == 'open');
            echo $a . 'door' . $doors [$a];
        }
}

test_doors ($doors);

// test fails
// added production code all doors are now open


// Now I want to test if all even doors are closed

function test_doors_even ($doors)
{
    if (( $a % 2 ) == 0)
    assert ($doors [$a] == 'closed');
}

test_doors_even ($doors);

//assertion failed