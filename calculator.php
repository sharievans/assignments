<?php

//Time to create the Calculator

class Calculator
{
    function add ($a, $b = null)
    {
        return $a + $b;
    }
    function sub ($a, $b = null)
    {
        return $a - $b;
    }
    function mult ($a, $b = null)
    {
        return $a * $b;
    }
    function div ($a, $b = null)
       {
            if ($b == 0)
            {
            return 'you cannot divide by zero';
            }
            else 
            {
             return $a / $b;
            }
        }
}

