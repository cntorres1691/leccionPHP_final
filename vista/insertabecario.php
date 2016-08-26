	<?php

	include_once("../modelo/colectorBecario.php");
	$BecarioObj = new BecarioCollector();
	if (!empty($_POST)) {
		if (empty($_POST['nombre'])) {

			echo "Por favor ingrese los datos ";
			echo "<meta http-equiv='Refresh' content='2;crearbecario.php'>";			
			
		}
	
		if (empty($_POST['programa'])) {

			echo "Por favor ingrese los datos ";
			echo "<meta http-equiv='Refresh' content='2;crearbecario.php'>";			
			
		}
		
		
}
?>
