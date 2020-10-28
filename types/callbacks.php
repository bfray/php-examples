<?php

function my_callback_function(){
    echo 'hello world!';
}

class MyClass {
    static function myCallbackMethod() {
        echo 'hello world';
    }
}


call_usr_func('my_callback_function');
call_usr_func(array('MyClass', 'myCallbackMethod'));
$obj = new myClass();
call_user_func(array($obj,'myCallbackMethod'));
call_user_func('MyClass::myCallbackMethod');


$double = function($a) {
    return $a * 2;
};

$numbers = range(1,5);

$new_numbers = array_map($double, $numbers);
print implode('', $new_numbers);


?>