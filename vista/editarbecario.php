<?php
ini_set('display_errors', 1);
require("../modelo/colectorBecario.php"); 

    $coll = new BecarioCollector();

if(isset($_GET["id"])){
    
    $obj = $coll->getNombre($_GET["id"]);
    $obj = $coll->getPrograma($_GET["id"]);

    ?>
    <form action="editarbecario.php" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $obj->getId(); ?>"/>
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $obj->getNombre();?>"><br>
      </div>
      <div>
            <label for="programa">Programa</label>
            <input type="text" name="programa" value="<?php echo $obj->getPrograma();?>"><br>
      </div>
        <div class="button">
            <button type="submit">Actualizar</button>
        </div>
    </form>
   
   <?php 
}else if(isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["programa"])){
    
    $obj = new becario();
    $obj->setId($_POST["id"]);
    $obj->setNombre($_POST["nombre"]);
    $obj->setNombre($_POST["programa"]);

  
    
    if($coll->updateBecario($obj)){
        echo "Becario actualizado con éxito";
    }else{
        echo "Hubo un error al intentar actualizar el Becario.";
    }
    
}else{
    echo "derp.";
}
