--TEST--
RCE via filter_input + FILTER_CALLBACK + 'exec'
--FILE--
<?php
$x = filter_input(INPUT_GET, 'x', FILTER_CALLBACK, ['options' => 'exec']);
return $x;
