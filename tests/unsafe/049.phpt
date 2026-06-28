--TEST--
Execute function through nullsafe method call
--FILE--
<?php

$a = new ArrayObject(['ls -l']);
$a?->uasort('system');
