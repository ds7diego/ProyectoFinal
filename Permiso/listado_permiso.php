<html>
  <head>
     <title>
        Listado Departamento
     </title>
  </head>
  <body>


<?php

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$query = "select * from Permisos order by Codigo_Permiso";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$codigo=0;
$nombre="";

echo "<table border=1>\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Codigo permiso</b></th>\n";
echo "\t\t<th>Empleado</th>\n";
echo "\t\t<th>fecha</th>\n";
echo "\t\t<th>motivo</th>\n";
echo "\t\t<th colspan=\"2\">Acciones</th>\n";
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   $codigo=$line["Codigo_permiso"];
   $codigoEmpleado=$line["Codigo_empleado"];
   $queryEmpleado = "select Nombre from Empleado where Codigo_empleado='$codigoEmpleado'";

   $result = mysqli_query($link,$queryEmpleado) or die('Query failed: ' . mysqli_error($link));   
   $fechaPermiso=$line["Fecha_permiso"];
   $motivoFalta=$line["motivo_falta"];

   echo "\t<tr>\n";
   echo "\t\t<td>$codigo</td>\n";
   while ($lineEmpleado = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $nombreEmpleado = $lineEmpleado["Nombre"];
      echo "\t\t<td>$nombreEmpleado</td>\n";
   }
   echo "\t\t<td>$fechaPermiso</td>\n";
   echo "\t\t<td>$motivoFalta</td>\n";
   echo "\t\t<td><a href=eliminar_permiso.php?codigo=$codigo><div style=\"width:10em; height:2em; width:2em;\"><img style=\"width:10em; height:2em; width:2em;\" src=../Imagenes/delete.png></div></a></td>\n";
   echo "\t\t<td><a href=modificar_permiso.php?codigo=$codigo&fechaPermiso=$fechaPermiso&motivoFalta=$motivoFalta><div style=\"width:10em; height:2em; width:2em;\"><img style=\"width:10em; height:2em; width:2em;\" src=../Imagenes/edit.png></div></a></td>\n";
   echo "\t</tr>\n";
}
echo "</table>\n";


mysqli_close($link);


?>




     <center>
         <a href="../index.html">regresar</a>
     </center>
  </body>
</html>
