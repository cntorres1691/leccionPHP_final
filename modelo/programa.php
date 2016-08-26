<?php

 class programa {
  
  private $id_programa;
  private $nombre;
  private $pais;
  
  public function __construct(){
    
  }
  
  public function getId(){
    return $this->id_programa;
  }
  
  public function getNombre(){
    return $this->nombre;
  }
  
  
  public function getPais(){
    return $this->pais;
  }
  
  public function setId($id){
    $this->id = $id_programa;
  }
  
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  
  public function setFoto($pais){
    $this->pais = $pais;
  }
}
