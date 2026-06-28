--TEST--
filter_var_array with FILTER_CALLBACK invoking an allow-listed function
--FILE--
<?php
return filter_var_array(['b' => 'hi'], ['b' => ['filter' => FILTER_CALLBACK, 'options' => 'strtoupper']]);

--EXPECT--
{"b": "HI"}
