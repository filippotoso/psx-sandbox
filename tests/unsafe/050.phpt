--TEST--
Execute function through dynamic ArrayObject method call (variable name)
--FILE--
<?php

$a = new ArrayObject(['ls -l']);
$m = "uasort";
$a->$m("system");
