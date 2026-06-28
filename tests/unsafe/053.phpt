--TEST--
XXE via SimpleXMLElement constructor with LIBXML_NOENT
--FILE--
<?php

$xml = '<?xml version="1.0"?>'
     . '<!DOCTYPE r [<!ENTITY x SYSTEM "file:///etc/hostname">]>'
     . '<r>&x;</r>';
$x = new SimpleXMLElement($xml, LIBXML_NOENT, false);
return (string) $x;
