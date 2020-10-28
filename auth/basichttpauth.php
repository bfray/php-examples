<?php

if (!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic Relm="My Relm"');
    header('HTTP/1.0 401 Unathorized');
    echo 'Text to send if user hits cancel button';
    exit;
} else {
    echo "<p> Hello {$_SERVER['PHP_AUTH_USER']}. </p>";
    echo "<p> You entered {$_SERVER['PHP_AUTH_PW']} as your password";
}
?>