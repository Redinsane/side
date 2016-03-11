<?php
	if($_SERVER["REQUEST_METHOD"] === 'POST') {
		$catalog = fopen('catalog.csv', 'a');
		 	fputcsv($catalog, [
		 		$_POST['id'],
   				$_POST['title'], 
   				$_POST['description'],
   				date('Y-m-d')
   		]); 
		 	header('Location: /bogdan/add.php');
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		<a href="/bogdan/">Home</a>
	</div>
	<form action="" method="POST">
		<input type="number" name="id" id=""><br>
		<input type="text" name="title" id=""><br>
		<input type="text" name="description" id=""><br>
		<input type="date" name="date" id=""><br>
		<input type="submit" value="Save">
	</form>
	<?php
		if (!empty($catalog)) {
			header('Location: /bogdan/');
		}
	?>
</body>
</html>