
<?php

ini_set('display_errors', 1);
require("../modelo/colectorPrograma.php"); 
if(isset($_POST["nombre"])){
  $vCollector = new ProgramaCollector();
  $programa = new becario();
  $programa->setId(1222);
  $programa->setNombre($_POST["nombre"]);
  $programa->setPais($_POST["pais"]);
  
  
  $vCollector->addPrograma($programa);
}else{
?>
  <html>

  <head>
  </head>

  <body>
   
	
	<form action="insertaprograma.php" method="post" enctype="multipart/form-data"> 
		 
		 Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="nombre" value="" /> <br /> <br /> 
		 Pais:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="pais" value="" /> <br /> <br /> 
		 
		 <input type="submit" value="Guardar" name="submit" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 
	 </form>
	
  </body>

  </html>
<?php
     }
