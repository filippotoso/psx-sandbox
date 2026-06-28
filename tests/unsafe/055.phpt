--TEST--
XXE via SimpleXMLElement constructor with numeric LIBXML_NOENT bitmask
--FILE--
<?php

$xml = '<r>&x;</r>';
$x = new SimpleXMLElement($xml, 2, false);
return (string) $x;
