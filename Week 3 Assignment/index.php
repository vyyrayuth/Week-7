<?php
    /*
    Write a function to reverse this string from "emocleW ot PHP" to "Welcome to PHP"
    */
    
    $string = "emocleW ot PHP";
    $length = strlen($string);

    for ($x = ($length-1); $x >= 0; $x--)
    {
        echo $string[$x];
    }

?>
