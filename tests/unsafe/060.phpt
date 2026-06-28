--TEST--
Closure::fromCallable with a non-literal callback argument is rejected
--FILE--
<?php

$cb = $_GET['cb'] ?? 'system';
$fn = Closure::fromCallable($cb);
return $fn instanceof Closure;
