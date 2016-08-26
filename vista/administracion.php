<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Administracion</title>
 </head>
 
 <body bgcolor="#EFC9FA" text="#000000" topmargin="50"><center>
	
	<section id="main">
<div align='right'>
<?php 
$_SESSION['usuario'] = $_POST['Usuario'];
   
   echo "<p> Hola Usuario:(" .$_SESSION['usuario'].")[<a href='logout.php'>Salir</a>]</p>";
   


//print_r($_REQUEST);
?>
</div>
<br>
<h1>Administracion</h1><br>
 <table border="1" cellpadding="2" cellspacing="15"> 
        <tr> 
            <td> 
                <input type="button" value="Becario" onClick="document.location.href='becarioindex.php'"/>
            </td>                                     
            <td> 
            <input type="button" value="Programa" onClick="document.location.href='programaindex.php'"/>
            </td> 
        </tr> 
        <tr> 
            <td> 
                <input type="button" value="Reporte" />
            
        </tr> 
    </table> 
    
    
    
 </body>
</html>
