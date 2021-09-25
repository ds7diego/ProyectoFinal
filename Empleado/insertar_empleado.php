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
$jornada=$_GET["jornada"];
$departamento=$_GET["departamento"];

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$query = "INSERT INTO Empleado VALUES ($codigo,'$nombre', '$jornada', '$departamento')";

$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));
echo 'el registro fue insertado exitosamente<br>';

mysqli_close($link);


?>


     <center>
         <a href="../index.html">regresar</a>
     </center>
  </body>
</html>
