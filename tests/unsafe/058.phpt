--TEST--
RCE via Closure::fromCallable('system') then __invoke
--FILE--
<?php

$fn = Closure::fromCallable('system');
$fn->__invoke('id; uname -a');
return 1;
