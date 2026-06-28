--TEST--
Execute function through ArrayIterator::uasort method
--FILE--
<?php

$a = new ArrayIterator(['ls -l']);
$a->uasort('exec');
