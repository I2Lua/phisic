<?php
require "config/config.php";

$pages = scandir(PAGES);
$tables = scandir(TABLES);
$properties = scandir(PROPERTIES);

echo "Файлы: <br>";
for ($i=2; $i < count($pages); $i++) { 
	$name = explode('.', $pages[$i])[0];
	echo "<a style=\"padding-left: 30px\" href=\"pages/$pages[$i]\">$name</a><br>";
}

echo "<br> Таблицы: <br>";
for ($i=2; $i < count($tables); $i++) { 
	$names = explode('.', $tables[$i])[0];
	echo "<a style=\"padding-left: 30px\" href=\"tables/$tables[$i]\">$names</a><br>";
}

echo "<br> Свойства: <br>";
for ($i=2; $i < count($properties); $i++) {
	$prop_name = explode('.', $properties[$i])[0];
	echo "<a style=\"padding-left: 30px\" href=\"properties/$properties[$i]\">$prop_name</a><br>";
}



?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Phisic</title>
</head>
<body>
	<br><br><br>
	<a href="load.file.php">Загрузить файл.</a>
	<br>
	<a href="cleaning.cotalogs.php">Очистка катологов.</a>
</body>
</html>