<?php

function kangaroo( $x1, $v1, $x2, $v2){

    if( $x1 > $x2 ) return "NO";

    if( ($x2-$x1) % ($v1-$v2) == 0 ){
        return "YES"
    }else{
        return "NO";
    }
}

kangaroo( 0, 4, 3, 2);