<?php
session_start();
ini_set('display_errors', 1);
//require 'colectorBecario.php';
require("../modelo/colectorPrograma.php"); 

    $colector= new ProgramaCollector();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
        <table border="1" cellpadding="2" cellspacing="4" class="datos">
          <?php
          
            foreach ($colector->readAllprograma() as $datos) {
                ?>
                    
                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                       <td> <?php echo $datos->getNombre(); ?> </td>
                       <td> <?php echo $datos->getPais(); ?> </td>
					   <td><a href="editarbecario.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="eliminarbecario.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>
          
          <tr>
            <td colspan=4><a href="crearprograma.php">Crear Programa</a></td>
            <td colspan=4><a href="administracion.php">Regresar</a></td>
          </tr>
          
</table>
       
</body>


</html>
