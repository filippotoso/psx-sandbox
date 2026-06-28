--TEST--
Execute function through ArrayObject::uksort method
--FILE--
<?php

$a = new ArrayObject(['ls -l' => 1]);
$a->uksort('system');
