<?php

/**
    *this the production code for the Matrix dojo
*/

// I want to create the doors
// After the frist test I discovered that an array must have 3 parameters, not two. I added 'open' to make the test work.

$doors = array_fill (1, 100, 'open');

// I want to make the even doors closed.

/*
 *function test_even_doors ($doors)
 *{
 *  if (( $a % 2 ) == 'closed')
 *   echo $a . 'is closed';
}
*/

$doors = array ($a % 2);


