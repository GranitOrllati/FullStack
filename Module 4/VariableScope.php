<?php
    $x=5; //Global Variable 

    function localVariable(){
        $y=10; //local variable

        
        echo $y;

    }



    localVariable();
    echo "\n, $x";

?>