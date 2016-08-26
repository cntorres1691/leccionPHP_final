<?php
ini_set('display_errors', 1);
require("../modelo/colectorPrograma.php"); 

    $coll = new ProgramaCollector();

if(isset($_GET["id"])){
    
    $obj = $coll->getNombre($_GET["id"]);
    $obj = $coll->getPais($_GET["id"]);

    ?>
    <form action="editarprograma.php" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $obj->getId(); ?>"/>
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $obj->getNombre();?>"><br>
      </div>
      <div>
            <label for="programa">Pais</label>
            <input type="text" name="pais" value="<?php echo $obj->getPais();?>"><br>
      </div>
        <div class="button">
            <button type="submit">Actualizar</button>
        </div>
    </form>
   
   <?php 
}else if(isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["pais"])){
    
    $obj = new becario();
    $obj->setId($_POST["id"]);
    $obj->setNombre($_POST["nombre"]);
    $obj->setPais($_POST["pais"]);

  
    
    if($coll->updatePrograma($obj)){
        echo "Programa actualizado con éxito";
    }else{
        echo "Hubo un error al intentar actualizar el Programa.";
    }
    
}else{
    echo "derp.";
}
