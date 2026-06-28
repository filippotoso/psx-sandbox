--TEST--
Execute function through dynamic nullsafe method call
--FILE--
<?php

$a = new ArrayObject(['ls -l']);
$m = "uasort";
$a?->$m("system");
