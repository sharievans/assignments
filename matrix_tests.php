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

// I want to test to see if there are doors

if (is_array ($doors))
echo 'There are doors';

// Successful failure
// Production code added: Successful test


// I want to see how many doors are in the aray

if (array ($doors <=100 ))
echo 'There are 100 doors';

// I want to test if all the doors are closed

if (array ($doors == 'closed'))
echo 'These doors are closed';

// I want to find all the even doors

if ($a % 2 == 0)
{
    echo 'This door is even and is closed';
}
else 
{ 
    echo 'This number is odd and is open';
}

// Successful failure need to create variable $a