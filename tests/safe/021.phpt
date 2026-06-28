--TEST--
SimpleXMLElement parsing without dangerous options is allowed
--FILE--
<?php

$x = new SimpleXMLElement('<r><a>foo</a><b>bar</b></r>');
return (string) $x->a . (string) $x->b;

--EXPECT--
"foobar"
