<?php

$data = parse_ini_file('config/config.ini');

print "Welcome! PHP version is " . PHP_VERSION . "\n";

print "just I want to say " . $data["greeting.welcome"] . "\n";

?>
