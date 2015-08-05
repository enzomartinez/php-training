<?php

	//$ SERVER

	$edad ="";

	
	if (empty($edad)) {
		echo "Error you must enter a value";
	} else{
		if (is_numeric($edad)) {
			if ($edad < 18) {
				echo "Joven";
			}else {
				if ($edad >= 18 && $edad <= 65) {
					echo "Adulto";
				}else {
					echo "Jubilado";
				}
			}
		}
	}

?>