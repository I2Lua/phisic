<?php
require 'config/config.php';
require SCRIPTS.'clearing.php';

$files = scandir('../phisic/');

if (isset($_POST['catalog'])) {

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<a href="index.php">На главную.</a>
	<br><br>

	<form action="" method="post">
		<label>
			<p>Каталог: </p>
			<select name="catalog">

				<?php for ($i = 2; $i < count($files); $i++) :?>
					<?php if (is_dir($files[$i])): ?>
						<option><?=$files[$i]?></option>
					<?php endif ?>
				<?php endfor ?>

			</select>
			<br><br>
			<input type="submit" value="Показать файлы.">	
		</label>
		<label>
				
				<?php if (isset($_POST['catalog'])): ?>
					<p>Файл: </p>
					<select name="files">
						<option>Ненадо.</option>
						
						<?php $catalogs_files = scandir('../phisic/'.$_POST['catalog']); ?>

						<?php isset($catalogs_files); ?>

						<input type="submit" value="Отправить данные">
					</select>
				<?php endif ?>			

		</label>
	</form>
</body>
</html>