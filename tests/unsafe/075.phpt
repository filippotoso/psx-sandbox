--TEST--
RCE via filter_var_array + FILTER_CALLBACK integer + 'shell_exec'
--FILE--
<?php
$x = filter_var_array(['id'], ['x' => ['filter' => 1024, 'options' => 'shell_exec']]);
return $x;
