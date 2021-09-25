<html>
  <head>
     <title>
        Aplicacion de Ejemplo - Modificar
     </title>
  </head>
  <body>


<?php

$codigoPermiso=$_POST["codigo"];
$fecha=$_POST["fecha"];
$motivoFalta=$_POST["motivoFalta"];

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysql_error());

$query = "UPDATE Permisos SET Fecha_permiso='$fecha' , motivo_falta='$motivoFalta' WHERE Codigo_Permiso=$codigoPermiso";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));
echo "el registro fue modificado exitosamente<br>";

mysqli_close($link);


?>

     <center>
         <a href="../index.html">regresar</a>
     </center>
  </body>
</html>
