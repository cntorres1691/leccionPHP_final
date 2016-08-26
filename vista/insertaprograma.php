	<?php

	include_once("../modelo/colectorPrograma.php");
	$ProgramaObj = new ProgramaCollector();
	if (!empty($_POST)) {
		if (empty($_POST['nombre'])) {

			echo "Por favor ingrese los datos ";
			echo "<meta http-equiv='Refresh' content='2;crearprograma.php'>";			
			
		}
	
		if (empty($_POST['pais'])) {

			echo "Por favor ingrese los datos ";
			echo "<meta http-equiv='Refresh' content='2;crearprograma.php'>";			
			
		}
		
		
}
?>
