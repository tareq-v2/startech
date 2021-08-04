<?php

@session_start();

$x = microtime();

session_id($x);

print "<script> location = 'home/'</script>";

?>