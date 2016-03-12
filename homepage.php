<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Доска объявлений</title>
</head>
<body>
	<h2>Добро пожаловать на сайт!</h2>
	<a href="add.php">Добавить объявление</a><br><br>
	<?php
	include ("init.php");
	$result = mysqli_query($connection,"SELECT title, description, date_added, time FROM ads ORDER BY ID");
	
	while($row = mysqli_fetch_assoc($result)){
		 echo '<h2><hr>'.$row['title'].'</h2>'.$row['description'].'<br><br>', $row['date_added'].' / ', $row['time'].'</hr>';
	}

	?>

</body>
</html>
