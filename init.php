<?php

$connection = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('bogdan');
mysql_set_charset('utf8');
if (!$connection || !$db) {
	exit(mysql_error() );
} 

$result = mysql_query(' SELECT * FROM ads ');



mysql_close();

$row = mysql_fetch_array($result);

echo $row['title'];