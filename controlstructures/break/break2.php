<?php

    $i = 0;
    while (++$i) {
        switch ($i) {
            case 5: 
                echo "At 5<br />\n";
                break 1;
            case 10:
                echo "At 10; quittting <br />\n";
                break 2;
            default:
                break;
        }
    }

?>