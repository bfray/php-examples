<?php

    foreach ($arr as $key => $value) {
        if (!($key % 2)) {
            continue;
        }
        do_something_odd($value);
    }

?>