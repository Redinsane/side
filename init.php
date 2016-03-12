$connection = new mysqli('localhost', 'root', '', 'bogdan');

mysqli_query($connection," SET NAMES 'utf8'");
if (!$connection) {
	exit(mysqli_error());
}
