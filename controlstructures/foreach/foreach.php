<?php

    $arr = array(1,2,3,4);
    foreach ($arr as &$value){
        $value = $value * 2;
    }

    unset($value); //break reference with the last element

?>