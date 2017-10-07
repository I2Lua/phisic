<?php
require 'config/config.php';
require SCRIPTS.'/move_files.php';

if ($_FILES) {
	// print_r($_FILES);
	move_file();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<br><br>
	<a href="index.php">На главную</a>
	<br><br>
	<form action="" enctype="multipart/form-data" method="post">
		<input type="file" name="file">
		<input type="submit" name="load-file">
	</form>
</body>
</html>