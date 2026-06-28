--TEST--
Closure::fromCallable with allow-listed function is permitted
--FILE--
<?php

$fn = Closure::fromCallable('strlen');
return $fn instanceof Closure;

--EXPECT--
true
