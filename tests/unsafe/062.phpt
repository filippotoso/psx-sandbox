--TEST--
Dynamic static method name via variable is rejected
--FILE--
<?php

$m = 'fromCallable';
Closure::$m('system');
return 1;
