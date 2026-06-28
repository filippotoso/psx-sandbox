--TEST--
Swift_Message is no longer an allow-listed class (aliasing target removed)
--FILE--
<?php

return new Swift_Message('system');
