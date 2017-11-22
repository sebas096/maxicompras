<?php
	session_start();
	$arreglo = $SESSION["carrito"];
	for ($i=0; $i <count($arreglo); $i++) 
	{ 
			if($arreglo[$i]["Id"]==$_GET["Id"])
			{
				$numero = $i;
			}
		}
		$arreglo[$numero]["Cantidad"] = $_POST["Cantidad"];
		for($i=0;$i<count($arreglo);$i++)
		{
			$total = ($arreglo[$i]["Precio"]*$arreglo[$i]["Cantidad"])+$total;
		}
		$_SESSION["carrito"]= $arreglo;
		echo $total;
?>