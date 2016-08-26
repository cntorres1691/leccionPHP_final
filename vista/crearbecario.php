
<?php

ini_set('display_errors', 1);
require("../modelo/colectorBecario.php"); 
if(isset($_POST["nombre"])){
  $vCollector = new BecarioCollector();
  $becario = new becario();
  $becario->setId(1222);
  $becario->setNombre($_POST["nombre"]);
  $becario->setPrograma($_POST["programa"]);
  
  
  $vCollector->addBecario($becario);
}else{
?>
  <html>

  <head>
  </head>

  <body>
   
	
	<form action="insertabecario.php" method="post" enctype="multipart/form-data"> 
		 
		 Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="nombre" value="" /> <br /> <br /> 
		 Programa:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="programa" value="" /> <br /> <br /> 
		 
		 <input type="submit" value="Guardar" name="submit" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 
	 </form>
	
  </body>

  </html>
<?php
     }
