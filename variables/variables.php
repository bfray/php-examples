<?php

$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var";

$bar = &$foo;
$bar = 'My name is $bar';
echo $bar;
echo $foo;

?>