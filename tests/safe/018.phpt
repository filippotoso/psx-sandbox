--TEST--
ArrayObject uasort with allowed callback
--FILE--
<?php

$a = new ArrayObject([3, 1, 2]);
$a->uasort(function ($a, $b) {
    return $a <=> $b;
});

return array_values(iterator_to_array($a));

--EXPECT--
[1,2,3]
