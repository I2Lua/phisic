<?php


function clearing($dir, $file = 'NaN') {
	$files = scandir($dir);

	if ($file == 'NaN') {
		for ($i=2; $i < count($files); $i++) { 
			unlink($dir.'/'.$files[$i]);
		}
	} else {
		unlink($dir.'/'.$file);
	}
}




