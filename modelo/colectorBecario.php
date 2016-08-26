<?php

  require 'collector.php';
  require 'becario.php';
  class BecarioCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addBecario($becario)
   {
     return self::execQuery("INSERT INTO becario(nombre, programa) VALUES('".$becario->getNombre()."','".$becario->getPrograma()."')");   
   }

   public function insertar($nombre, $programa) {    
		//$insertrow = self::$db->insertRow("INSERT INTO Demo (nombre, foto) VALUES (?, ?)", array("{$nombre}", "{$imagen}"));
		try
    {
      self::execQuery("INSERT INTO becario (nombre, programa) VALUES ( '".$nombre."','".$programa."') ");

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
	} 
	
   public function getNombre($id_becario)
   {
    
    $stmt = $this->con->prepare("SELECT * FROM becario WHERE id=:id");
    $stmt->execute(array(":id"=>$id_becario));
    $becario=$stmt->fetchObject("becario");
    return $becario;
   }
   public function readAllBecario(){

      return self::read('becario','becario'); 


  }

   public function updateBecario($becario)
   {
    try
    {
      self::execQuery("UPDATE becario SET id='".$becario->getId()."',nombre='".$becario->getNombre()."',programa='".$becario->getPrograma()."' WHERE id=".$becario->getId());

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }

   public function deleteBecario($becario)
   {
    try
    {
      self::execQuery("DELETE FROM becario WHERE id=".$becario);

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
