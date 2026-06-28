--TEST--
SimpleXMLElement constructor with non-literal options is rejected
--FILE--
<?php

$opts = LIBXML_NOENT;
$x = new SimpleXMLElement('<r/>', $opts);
return (string) $x;
