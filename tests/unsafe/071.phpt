--TEST--
RCE via filter_var + FILTER_CALLBACK direct callable form
--FILE--
<?php
$x = filter_var('id', FILTER_CALLBACK, 'system');
return $x;
