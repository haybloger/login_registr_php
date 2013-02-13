<?php
$mysql_host = 'host';
$mysql_user = 'user_name';
$mysql_pass = 'password';
     
$mysql_db = 'db_name';
     
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)){
die (mysql_error());
}
     
?>
