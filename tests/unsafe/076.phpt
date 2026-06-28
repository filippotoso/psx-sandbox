--TEST--
filter_var + FILTER_CALLBACK rejected when options is a non-literal callback expression
--FILE--
<?php
$cb = $_GET['cb'] ?? 'system';
$x = filter_var('id', FILTER_CALLBACK, ['options' => $cb]);
return $x;
