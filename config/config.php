<?php
$db_options = parse_ini_file('access.ini');

define('HOST', $db_options['host']);
define('USER', $db_options['user']);
define('PASSWORD', $db_options['password']);
define('DB', $db_options['db']);