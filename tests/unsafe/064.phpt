--TEST--
class_alias is not allowed (file read via SplFileObject aliased onto Swift_Message)
--FILE--
<?php

class_alias('SplFileObject', 'Swift_Message');
$f = new Swift_Message('/etc/passwd');
return $f->fread($f->getSize());
