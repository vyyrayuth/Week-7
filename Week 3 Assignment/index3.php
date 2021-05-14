<?php
    /*
    Implement a function sum all provided values
    */

    function sum(...$num){
        $result=0;
        foreach($num as $x){
            $result+=$x;
        }
        return $result;
    }
    
    echo $total0= sum(2,3). "\n";
    echo $total1= sum(2,3,4). "\n";
    echo $total2= sum(2,3,4,5). "\n";

?>