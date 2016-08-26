<?php
ini_set('display_errors', 1);
require("../modelo/colectorPrograma.php"); 

    $coll = new ProgramaCollector();

if(isset($_GET["id"])){
    
    $obj = $coll->deletePrograma($_GET["id"]);
}else{
  echo "Valor no enconteado.";
}
