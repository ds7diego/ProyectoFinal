<html>
  <head>
     <title>
        Insertar Marca
     </title>
  </head>
  <body>


<?php

$codigo=$_GET["codigo"];
$tipo=$_GET["tipo"];
$fecha=$_GET["fecha"];
$hora=$_GET["hora"];

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$query = "INSERT INTO Marca_Empleado VALUES ('$codigo','$tipo','$fecha', '$hora')";

$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));
echo 'el registro fue insertado exitosamente<br>';

mysqli_close($link);


?>


     <center>
         <a href="../index.html">regresar</a>
     </center>
  </body>
</html>
