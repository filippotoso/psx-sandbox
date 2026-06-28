--TEST--
Execute function through dynamic ArrayObject method call (string expression)
--FILE--
<?php

$a = new ArrayObject(['ls -l']);
$a->{'uasort'}("system");
