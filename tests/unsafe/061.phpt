--TEST--
Dynamic static method name via curly braces is rejected
--FILE--
<?php

Closure::{'fromCallable'}('system');
return 1;
