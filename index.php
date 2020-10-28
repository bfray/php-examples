<?php
 $request = $_SERVER['REQUEST_URI'];
 

 switch($request) {
    case '/': 
        require __DIR__ . '/index.html';
        break;
    case '': 
        require __DIR__ . '/index.html';
        break;
    case $request:
        require __DIR__ . $request;
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.html';
        break;

    };
 ?>
