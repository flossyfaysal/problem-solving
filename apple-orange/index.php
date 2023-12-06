<?php

function appleOrangeCount(){
    $s = 4; 
    $t = 12;
    $a = 7;
    $b = 10; 

    $apple = $orage = 3; 

    $appleRange = [2, 3, 7];
    $orangeRange = [4, -12, 5];

    $appleCount = 0;
    $orangeCount = 0;

    for($i = 0; $i < count($appleRange); $i++){
        $distance = $appleRange[$i] + $a;
        if( $distance <= $a && $distance <= $b ){
            $appleCount++;
        }
    }

    for($i = 0; $i < count($orangeRange); $i++){
        $distance = $orangeRange[$i] + $a;
        if( $distance <= $a && $distance <= $b ){
            $orangeCount++;
        }
    }

    echo $appleCount . "\n";
    echo $orangeCount;
}

appleOrangeCount();