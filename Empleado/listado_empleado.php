<html>
  <head>
     <title>
        Aplicacion de Ejemplo - Listado
     </title>
  </head>
  <body>


<?php

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$query = "SELECT e.Codigo_empleado, e.Nombre, j.Nombre_Jornada, d.Nombre_Departamento FROM empleado e INNER JOIN jornadas_laborales j ON e.Codigo_Jornada = j.Codigo_Jornada INNER JOIN departamento d ON e.Codigo_Departamento = d.Codigo_Departamento WHERE 1";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$codigo=0;
$nombre="";


echo "<table border=1>\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Codigo</b></th>\n";
echo "\t\t<th>Nombre</th>\n";
echo "\t\t<th>Jornada</th>\n";
echo "\t\t<th>Departamento</th>\n";
echo "\t\t<th colspan=\"3\">Acciones</th>\n";
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   $codigo=$line["Codigo_empleado"];
   $nombre=$line["Nombre"];
   $jornada=$line["Nombre_Jornada"];
   $departamento=$line["Nombre_Departamento"];

   echo "\t<tr>\n";
   echo "\t\t<td>$codigo</td>\n";
   echo "\t\t<td>$nombre</td>\n";
   echo "\t\t<td><a href=eliminar_empleado.php?codigo=$codigo><div style=\"width:10em; height:2em; width:2em;\"><img style=\"width:10em; height:2em; width:2em;\" src=../Imagenes/delete.png></div></a></td>\n";
   echo "\t\t<td><a href=modificar_empleado.php?codigo=$codigo&nombre=$nombre><div style=\"width:10em; height:2em; width:2em;\"><img style=\"width:10em; height:2em; width:2em;\" src=../Imagenes/edit.png></div></a></td>\n";
   echo "\t\t<td><a href=./../Reporte/reporte_empleado.php?codigo=$codigo><div style=\"width:10em; height:2em; width:2em;\"><img style=\"width:10em; height:2em; width:2em;\" src=../Imagenes/report.png></div></a></td>\n";
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
