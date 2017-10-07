<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="../index.php">На главную.</a>
	<br><br>
	<form action="" method="post">
		
		c: <input type="text" name="c">
		<br>
		m: <input type="text" name="m">
		<br>
		t1: <input type="text" name="t1">
		<br>
		t2: <input type="text" name="t2">

		<input type="submit">
	</form>
	<br><br>

	<?php if ($_POST): ?>
		<h3>Формула: </p>
		<h4 style="padding-left: 30px">Q = c * m * (t2 - t1)</h4>

		<h3>Ответ: </h3>
		<h4 style="padding-left: 30px"><?=$_POST['c'] * $_POST['m'] * ($_POST['t2'] - $_POST['t1'])?></h4>
	<?php else: ?>
		<h3>Формула: </p>
		<h4 style="padding-left: 30px">Q = c * m * (t2 - t1)</h4>
	<?php endif ?>
</body>
</html>