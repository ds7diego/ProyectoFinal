<html>
  <head>
     <title>
        Eliminar departamento
     </title>
  </head>
  <body>


<?php

$codigo=$_GET["codigo"];

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysqli_error());


$queryDeletePermisos = "DELETE FROM Permisos WHERE Codigo_empleado=$codigo";
$query = "DELETE FROM Empleado WHERE Codigo_empleado=$codigo";

$result = mysqli_query($link,$queryDeletePermisos) or die('Query failed: ' . mysqli_error($link));
$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

echo 'el registro fue eliminado exitosamente<br>';

mysqli_close($link);


?>


     <center>
         <a href="../index.html">regresar</a>
     </center>
  </body>
</html>
