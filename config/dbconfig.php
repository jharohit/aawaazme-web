<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'rohitjha_aawaaz');
define('DB_PASSWORD', '*******');
define('DB_DATABASE', 'rohitjha_aawaazme');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>
