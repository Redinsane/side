<?php
include 'homepage.php';
$db = new PDO('mysql:host=localhost;dbname=bogdan', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
$sql = 'SELECT * FROM ads';
$result = $db->query($sql);
	while ($ads = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<h2>{$ads['id']} . {$ads['title']}</h2> {$ads['description']} <h3>{$ads['date_added']} / {$ads['time']}</h3><hr></hr><br>";
}



	