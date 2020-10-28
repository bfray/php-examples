<?php

    $a = array();
    $a[0][0] = "a";
    $a[0][1] = "b";
    $a[1][1] = "c";
    $a[1][1] = "z";

    foreach ($a as $v1){
        foreach ($v1 as $v2) {
            echo "$v2\n";
        }
    }

?>