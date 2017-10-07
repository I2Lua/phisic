<?php 


function move_file() {
	switch ($_FILES['file']['type']) {
		case 'application/octet-stream':
			$type_and_name = explode('.', (string) $_FILES['file']['name']);

			if ($type_and_name[1] == 'php') {
				if (move_uploaded_file($_FILES['file']['tmp_name'],'pages/'.'/'.$_FILES['file']['name'])) {
					echo 'Успешно отправил!<br>';
					break;
				}
			} elseif ($type_and_name[1] == 'sql') {
				if (move_uploaded_file($_FILES['file']['tmp_name'],'sql_files-databases/'.'/'.$_FILES['file']['name'])) {
					echo 'Успешно отправил!<br>';
					break;
				}
			} elseif ($type_and_name[1] == 'js') {
				if (move_uploaded_file($_FILES['file']['tmp_name'],'js/'.'/'.$_FILES['file']['name'])) {
					echo 'Успешно отправил!<br>';
					break;
				}
			}
		case 'text/plain':
			$type_and_name = explode('.', (string) $_FILES['file']['name']);

			if ($type_and_name[1] != 'js' && move_uploaded_file($_FILES['file']['tmp_name'], 
				'another_files/'.'/'.$_FILES['file']['name'])) {
				 	echo 'Файл успешно отправлен'; 
					break;
			} elseif ($type_and_name[1] == 'js') {
				if (move_uploaded_file($_FILES['file']['tmp_name'],'js/'.'/'.$_FILES['file']['name'])) {
					echo 'Успешно отправил!<br>';
					break;
				}
			}
		default :
			if (move_uploaded_file($_FILES['file']['tmp_name'],'pages/'.'/'.$_FILES['file']['name'])) {
					echo 'Успешно отправил!<br>';
					break;
		}
	}
}



