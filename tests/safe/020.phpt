--TEST--
Nullsafe method call with allowed callback
--FILE--
<?php

$a = new ArrayObject([3, 1, 2]);
$a?->uasort('strcmp');

return array_values(iterator_to_array($a));

--EXPECT--
[1,2,3]
