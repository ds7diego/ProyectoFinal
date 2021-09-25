<html>
  <head>
     <title>
       Modificar Departamento
     </title>
  </head>
  <body>
     <form action="modificar.php" method="post">

<?php
  $codigo =  $_GET["codigo"];
	$fecha=$_GET["fechaPermiso"];
	$motivoFalta=$_GET["motivoFalta"];

      echo "<b>Codigo: </b>\n";
      echo "<input type=text name=codigo value=$codigo><br>\n";

	     echo "<b>fecha: </b>\n";
       echo "<input type=date name=fecha value=$fecha\"><br>\n";
       echo "<b>motivo falta:</b>\n";

       echo "<input type=text name=motivoFalta value=$motivoFalta length=50><br>\n";

?>

       <input type="submit" name="submit" value="enviar">     
     </form>
     <center>
         <a href="../index.html">regresar</a>
     </center>
  </body>
</html>
