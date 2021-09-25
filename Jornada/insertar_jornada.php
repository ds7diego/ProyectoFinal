<html>
  <head>
     <title>
        Aplicacion de Ejemplo
     </title>
  </head>
  <body>


<?php

$codigo=$_GET["codigo"];
$nombre=$_GET["nombre"];
$horaEntrada=$_GET["horaEntrada"];
$horaSalida=$_GET["horaSalida"];

$link = mysqli_connect('localhost', 'root', 'root','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$query = "INSERT INTO Jornadas_Laborales VALUES ($codigo,'$nombre','$horaEntrada','$horaSalida')";

$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));
echo 'el registro fue insertado exitosamente<br>';

mysqli_close($link);


?>


     <center>
         <a href="../index.html">regresar</a>
     </center>
  </body>
</html>
