<?php

	//$ SERVER
	function calculate($edad){
		$edad ="";
		$error = "";
		$result ="";
		if ($_SERVER["REQUEST_METHOD"] == "GET") {
			$edad =$_GET["edad"];
		} else{
			$edad =$_POST["edad"];
		}
		if (empty($edad)) {
			$error = "Error you must enter a value";
		} else{
			if (is_numeric($edad)) {
				if ($edad < 18) {
					echo "Joven";
				}else {
					if ($edad >= 18 && $edad <= 65) {
						$result = "Adulto";
					}else {
						$result = "Jubilado";
					}
				}
			}else{
				$error = "Error debe ingresar un numero";
			}
		}
		$response = array();
		if ($error == "") {
			$response = array("status"=>true, "data"=> $result);
		}else{
			$response = array("status"=>false, "data"=> $error);
		}
		return $response;
	}



	$value ="";

	if ($_SERVER["REQUEST_METHOD"]=="GET") {
		$value = $_GET["edad"];
	} else{
		$value =$_POST["edad"];
	}
	$res = calculate($value);
	if ($res["status"]==true) {
		echo "Fue exitoso: <br>".$res["data"]."</br>";
	}else if ($res["status"] == false){
		//fall
		echo "Fallo:".$res["data"];
	}

	//if ($_SERVER["REQUEEST_METOD"] === "GET") {
	//	$value = $_GET["edad"];
	//}else{
	//	$value = $POST["edad"];
	//}
	//$result = calculate($edad);
	//echo $result;
?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$value ="";

	if ($_SERVER["REQUEST_METHOD"]=="GET") {
		$value = $_GET["edad"];
	} else{
		$value =$_POST["edad"];
	}
	$res = calculate($value);
	if ($res["status"]==true) {
		echo "Fue exitoso: <br>".$res["data"]."</br>";
	}else if ($res["status"] == false){
		//fall
		echo "Fallo:".$res["data"];
	}
	?>
</body>
</html>