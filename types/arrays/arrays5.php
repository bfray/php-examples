<?php

    $arr = array('fruit' => 'apple', 'veggie' => 'carrot');
    print $arr['fruit'];
    print $arr['veggie'];
    
    foreach ($arr as $k => $v){
        echo "key=", "$k", "value=", "$v", "\n";
    }


?>