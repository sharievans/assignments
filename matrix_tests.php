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

if ( is_array ($doors))
echo 'There are doors';

// Successful failing test
// Production code added: Successful test



// I want to test the number of doors.

if (array ($doors <= 100))
echo 'There are 100 or less doors';

//Succesful test


// I want to test if all the even doors are closed.

/* if ($doors % 2)
{
    echo 'This is a closed door';
}
else
{
    echo 'This is an open door';
} */

// Test echos 'This is a closed door'


if (array ($doors == $a % 2))
echo 'This is a closed door';

// Successful failing test
