<?php
$db_host = "localhost:3306";
$db_username = "impulsei_impulse";
$db_pass = "impulse2011?";
$db_name = "impulsei_narendra";
mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");

?>
