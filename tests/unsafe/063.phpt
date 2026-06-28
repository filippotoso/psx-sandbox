--TEST--
class_alias is not allowed (RCE via ReflectionFunction aliased onto Swift_Message)
--FILE--
<?php

class_alias('ReflectionFunction', 'Swift_Message');
$rf = new Swift_Message('system');
return $rf->invoke('id');
