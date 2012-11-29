<?php

/**
    *this the production code for the Matrix dojo
*/

// I want to create the doors

$doors = array_fill (1, 100, 'closed');

// Makes incrementing doors open

for ( $a = 1; $a <= 100; $a++)
{
    if ($doors [$a] == 'closed')
    $doors [$a] = 'open';
}

// This will make all the even doors closed

for ( $a = 1; $a <= 100; $a++)
{
    if ($doors ($a % 2) == 'closed')
    echo 'Even doors are closed';
}