--TEST--
filter_var with FILTER_CALLBACK invoking an allow-listed function
--FILE--
<?php
return filter_var('hi', FILTER_CALLBACK, ['options' => 'strtoupper']);

--EXPECT--
"HI"
