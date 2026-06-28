--TEST--
filter_var with FILTER_CALLBACK invoking a closure
--FILE--
<?php
return filter_var('hi', FILTER_CALLBACK, ['options' => function ($v) {
    return strtoupper($v);
}]);

--EXPECT--
"HI"
