--TEST--
RCE via filter_var + FILTER_CALLBACK + 'system'
--FILE--
<?php
$x = filter_var('id', FILTER_CALLBACK, ['options' => 'system']);
return $x;
