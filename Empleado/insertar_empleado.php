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

$link = mysqli_connect('localhost', 'root', 'root','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$query = "INSERT INTO Empleado VALUES ($codigo,'$nombre',1)";

$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));
echo 'el registro fue insertado exitosamente<br>';

mysqli_close($link);


?>


     <center>
         <a href="index.html">regresar</a>
     </center>
  </body>
</html>
