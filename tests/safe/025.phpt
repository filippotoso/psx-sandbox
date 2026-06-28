--TEST--
filter_var with a non-callback filter passes options untouched
--FILE--
<?php
return filter_var('123', FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]);

--EXPECT--
123
