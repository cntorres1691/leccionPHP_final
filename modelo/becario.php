<?php

 class Demo {
  
  private $id_becario;
  private $nombre;
  private $programa;
  
  
  public function __construct(){
    
  }
  
  public function getId(){
    return $this->id_becario;
  }
  
  public function getNombre(){
    return $this->nombre;
  }
  
  public function getPrograma(){
    return $this->programa;
  }
  
  public function setId($id_becario){
    $this->id = $id_becario;
  }
  
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  
  public function setPrograma($programa){
    $this->programa = $programa;
  }
  
}
