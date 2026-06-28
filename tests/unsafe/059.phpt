--TEST--
Closure::fromCallable with a forbidden function string is rejected
--FILE--
<?php

$fn = Closure::fromCallable('exec');
return $fn instanceof Closure;
