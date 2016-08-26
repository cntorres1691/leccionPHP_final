<?php

  require 'collector.php';
  require 'programa.php';
  class ProgramaCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addPrograma($programa)
   {
     return self::execQuery("INSERT INTO Programa(nombre) VALUES('".$programa->getNombre()."')");   
   }

   public function insertar($nombre, $pais) {    
		//$insertrow = self::$db->insertRow("INSERT INTO Demo (nombre, foto) VALUES (?, ?)", array("{$nombre}", "{$imagen}"));
		try
    {
      self::execQuery("INSERT INTO programa (nombre, pais) VALUES ( '".$nombre."','".$pais."') ");

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
	} 
	
   public function getNombre($id)
   {
    
    $stmt = $this->con->prepare("SELECT * FROM programa WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetchObject("programa");
    return $usuario;
   }
   public function readAllprograma(){

      return self::read('programa','programa'); 


  }

   public function updatePrograma($demo)
   {
    try
    {
      self::execQuery("UPDATE Programa SET id='".$programa->getId()."',nombre='".$programa->getNombre()."',pais='".$programa->getPais()."' WHERE id=".$programa->getId());

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }

   public function deletePrograma($programa)
   {
    try
    {
      self::execQuery("DELETE FROM programa WHERE id=".$programa);

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   } 
}
?>
