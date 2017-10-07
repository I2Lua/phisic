<?php

function rounding($variable, $sign) {
	if (!is_double($variable) && !is_int($sign)) return False; 

	$first = explode('.', (string) $variable);

	if ($first[1][$sign] > 0) {
		echo $first[1][-1];
	}
}

echo rounding(13.59635656, 3);
