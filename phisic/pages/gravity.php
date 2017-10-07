<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fтяж</title>
</head>
<body>
	<a href="../index.php">На главную</a>
	<div>
		<?php
			if (!$_POST) {
				echo "<h3>Формула:</h3>";
				echo "<p style=\"padding-left: 30px\">Fтяж = m * g</p>";
				echo "<p style=\"padding-left: 30px\">Измеряется в: H (Ньютон)</p>";
			} else {	
				echo "<h3>Формула:</h3>";
				echo "<p style=\"padding-left: 30px\">Fтяж = m * g</p>";
				$result = $_POST['mass'] * 9.8;
				echo "Fтяж = $result H";
				echo "<br><br>";
			}
		?>
	</div>
	<form action="" method="post">
		<label for="mass">Масса: </label>
		<input type="text" name="mass" id="mass">
		<input type="submit" name="">
	</form>
</body>
</html>