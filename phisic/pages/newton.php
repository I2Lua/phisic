<?php
require '../config/config.php';
require '../'.CLASSES.'Newton.php';


if ($_POST && isset($_POST['methodts'])) {
	$newton_functions = new Newton_Function();
	switch ($_POST['methodts']) {
		case 'Где применяется':
			$newton_functions->Value();
			break;
		case 'Все именна переменных':
			$newton_functions->showVariables();
			break;
		case 'Все обозначения':
			$newton_functions->WorldNames();
			break;
		case 'Формула':
			$newton_functions->Formula();
			break;
		case 'Что нужно ввести?':
			$newton_functions->AllVarNames();
			break;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script alt="../scripts/algoritsm.js"></script>
</head>
<body>
	<a href="../index.php">На главную</a>
	<br><br>
	<form action="" method="post">
		<select id="" name="methodts">
			<option disabled="disa" id='disa'>Что сделать?</option>
			<option>Где применяется</option>
			<option>Что нужно ввести?</option>
			<option>Все обозначения</option>
			<option>Формула</option>
		</select>
		<input type="submit" name="get_methods">
	</form>
	<br><br>
	<hr>
	<h2>Найти Ньютоны</h2>
	<form action="" method="post">
		<label>
			<p>Киллограммы</p>
			<input type="text" name="kill">
		</label>
		<label>
			<p>Метры</p>
			<input type="text" name="metr">
		</label>
		<label>
			<p>Секунды</p>
			<input type="text" name="seconds">
		</label>
		<label>
			<p>Сколько нужно Ньютонов(Н)?</p>
			<input type="text" name="amount">
		</label>
		<br><br>
		<input type="submit" name="get_newton">
	</form>
	

	<?php

	if ($_POST && isset($_POST['get_newton'])) {
		$newton = new Newton($_POST['kill'], $_POST['metr'],
							$_POST['seconds'], $_POST['amount']);
	}
	?>
</body>
</html>