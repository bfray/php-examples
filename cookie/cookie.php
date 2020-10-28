<?php
$value = "something from somewhere";

setCookie("TestCookie", $value);
setCookie("TestCookie", $value, time()+3600);
setCookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);

echo $_COOKIE["TestCookie"];
print_r($_COOKIE);

setCookie("cookie[three]", "cookiethree");
setCookie("cookie[two]", "cookieTwo");
setCookie("cookie[one]", "cookieOne");

if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value){
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
}


?>