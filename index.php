<?php
	$catalog = fopen('catalog.csv', 'r');
	$items = [];
	while ($item = fgetcsv($catalog)) {
		$items[] = $item;
	}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include "header.php";
include "footer.php";
include "init.php";
?>
<body>


	<div>
		<a href="/bogdan/add.php">Add</a>
	</div>
	<?php include 'content.php' ?>

	
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>