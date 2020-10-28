<?php

    // Won't work; file.txt wasn't handled by www.example.com as PHP
    include 'http://www.example.com/file.txt?foo=&bar=2';

    // Won't work; looks for file named 'file.php?foo=1&bar=2' on the filesyste'
    include 'file.php?foo=11&bar=2';
    
    // Works file.php
    include 'http://www.example.com/file.php?foo=1&bar=2';

?>