<?php

Define('DB_user', '');
Define('DB_password','');
Define('DB_host', 'localhost');
Define('DB_name', 'accounts');

$dbc = @mysqli_connect(DB_host,DB_user,DB_password, DB_name)
OR die('Could not connect to MySQL' .
	   mysql_connect_error());

?>