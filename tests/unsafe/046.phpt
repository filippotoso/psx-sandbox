--TEST--
Execute function through ArrayObject::uasort method
--FILE--
<?php

$a = new ArrayObject(['ls -l']);
$a->uasort('system');
