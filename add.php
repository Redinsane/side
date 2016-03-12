<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавление объявления</title>
</head>
<body>
	
	<form method="POST" action="add.php">
	Название объявления<br />
		<input type="text" name="title"><br><br>

	Текст объявления<br>	
		<textarea cols="40" rows="10"></textarea><br>
		<input type="hidden" name="date"><?php echo date('Y-m-d');?> /
		<input type="hidden" name="time"><?php echo date('H:i:s');?><br>
	
	<input type="submit" name="add" value="Добавить">	

	</form>
	<?php
	
	include("init.php");
$date=date("d.m.y");

	$title = strip_tags(trim($_POST['title']));
	$description = strip_tags(trim($_POST['description']));
	$date_added = ($_POST['date_added']);
	$time = ($_POST['time']);

	mysqli_query($connection,"INSERT INTO ads(title, description, date_added, time) VALUES ('$title', '$description', '$date_added', '$time')");
	
	?>



</body>
</html>
