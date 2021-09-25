<html>
  <head>
     <title>
        Insertar permiso
     </title>
  </head>
  <body>


<?php

$codigoPermiso=$_GET["codigoPermiso"];
$codigoEmpleado=$_GET["empleado"];
$fecha=$_GET["fecha"];
$motivo=$_GET["motivo"];

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$query = "INSERT INTO Permisos VALUES ($codigoPermiso,'$codigoEmpleado','$fecha','$motivo')";

$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));
echo 'el registro fue insertado exitosamente<br>';

mysqli_close($link);


?>


     <center>
         <a href="../index.html">regresar</a>
     </center>
  </body>
</html>
