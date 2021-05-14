<?php 

    /*
    Write a program to filter an array by even numbers with an arrow function. 
    */
    $arr = array(2, 3, 4, 6, 7, 9, 11, 20);

    $even= var_dump(array_filter($arr,fn($arr)=>$arr%2===0));

    echo $even;

?>
