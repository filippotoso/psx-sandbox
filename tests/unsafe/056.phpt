--TEST--
XXE via SimpleXMLIterator constructor with LIBXML_DTDLOAD
--FILE--
<?php

$xml = '<r>&x;</r>';
$x = new SimpleXMLIterator($xml, LIBXML_DTDLOAD, false);
return (string) $x;
