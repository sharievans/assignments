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


// I want to test the exisitance of the doors
if ( is_array ($doors))
echo 'There are doors in this array';


// I want to test to see if the array has doors have 100 or less doors.
if (array ($doors <= 100))
echo 'There are 100 or less doors';


// I want to test if all the doors are closed.
if (array ($doors == 'closed'))
echo 'These doors are closed';

// I want to find all the even doors.

if ($doors % 2) 
{
echo "This number is not even.";
} 

else {
echo "This number is even.";
}
    
