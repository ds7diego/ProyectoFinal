<html>
  <head>
     <title>
        Aplicacion de Ejemplo - Modificar
     </title>
  </head>
  <body>


<?php

$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$horaEntrada=$_POST["horaEntrada"];
$horaSalida=$_POST["horaSalida"];

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysql_error());

$query = "UPDATE Jornadas_Laborales SET Nombre_Jornada='$nombre', Hora_entrada = '$horaEntrada', Hora_salida = '$horaSalida' WHERE Codigo_Jornada=$codigo";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));
echo "el registro fue modificado exitosamente<br>";

mysqli_close($link);


?>

     <center>
         <a href="index.html">regresar</a>
     </center>
  </body>
</html>
