<html>
  <head>
     <title>
       Modificar jornada
     </title>
  </head>
  <body>
     <form action="modificar.php" method="post">

<?php
    
	$codigo=$_GET["codigo"];
	$nombre=$_GET["nombre"];
  $horaEntrada=$_GET["horaEntrada"];
	$horaSalida=$_GET["horaSalida"];

	   echo "<b>Codigo: </b>$codigo<br>\n";
       echo "<input type=hidden name=codigo value=$codigo>\n";
       echo "<b>Nombre:</b>\n";

       echo "<input type=text name=nombre value=$nombre length=20><br>\n";
       echo "<b>Hora Entrada:</b>\n";

       echo "<input type=text name=horaEntrada value=$horaEntrada length=20><br>\n";
       echo "<b>Hora Salida:</b>\n";

       echo "<input type=text name=horaSalida value=$horaSalida length=20><br>\n";

?>

       <input type="submit" name="submit" value="enviar">     
     </form>
     <center>
         <a href="../index.html">regresar</a>
     </center>
  </body>
</html>
