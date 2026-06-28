--TEST--
SimpleXMLElement::asXML() with no argument returns the document as a string
--FILE--
<?php

$x = new SimpleXMLElement('<r><a>foo</a></r>');
return $x->asXML();
--EXPECT--
"<?xml version=\"1.0\"?>\n<r><a>foo</a></r>\n"
