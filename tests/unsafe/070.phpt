--TEST--
RCE via filter_var + FILTER_CALLBACK (integer 1024) + 'system'
--FILE--
<?php
$x = filter_var('id', 1024, ['options' => 'system']);
return $x;
