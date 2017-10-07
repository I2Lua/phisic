<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="../index.php">На гланую.</a><br><br>
	<form action="" method="post">
		k: <input type="text" name="k"><br>
		N: <input type="text" name="N"><br><br>
		<input type="submit" value="Ответ.">
	</form>
	<?php if ($_POST): ?>
		<h3>Формула: </h3>
		<h4 style="padding-left: 30px">Fтр = k * N</h4>
		<p style="padding-left: 30px">Где: k - коэффициент, N - сила опоры</p>
		Ответ: <h4 style="display: inline;">Fтр = <?=$_POST['k'] * $_POST['N']?> H</h4>
	<?php else: ?>
		<h3>Формула: </h3>
		<h4 style="padding-left: 30px">Fтр = k * N</h4>
		<p style="padding-left: 30px">Где: k - коэффициент, N - сила опоры</p>

	<?php endif ?>

</body>
</html>