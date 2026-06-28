--TEST--
RCE via filter_var_array + FILTER_CALLBACK + 'system'
--FILE--
<?php
$x = filter_var_array(['id'], ['x' => ['filter' => FILTER_CALLBACK, 'options' => 'system']]);
return $x;
