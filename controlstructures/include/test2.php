<?php
    function foo(){
        
        global $color;
        include 'vars.php';
        if ((include('vars.php') == TRUE)) {
            echo 'OK';
        }
        echo "A $color $fruit";
    }

    foo();                  // A green apple
    echo "A $color $fruit";  // A green

?>