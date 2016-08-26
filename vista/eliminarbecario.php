<?php
ini_set('display_errors', 1);
require("../modelo/colectorBecario.php"); 

    $coll = new BecarioCollector();

if(isset($_GET["id"])){
    
    $obj = $coll->deleteBecario($_GET["id"]);
}else{
  echo "Valor no enconteado.";
}
