<html>
  <head>
     <title>
        Listado Departamento
     </title>
  </head>
  <body>


<?php

$link = mysqli_connect('localhost', 'root', 'root','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$query = "select * from Jornadas_Laborales order by Codigo_Jornada";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$codigo=0;
$nombre="";

echo "<table border=1>\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Codigo</b></th>\n";
echo "\t\t<th>Nombre</th>\n";
echo "\t\t<th>Hora Entrada</th>\n";
echo "\t\t<th>Hora Salida</th>\n";
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   $codigo=$line["Codigo_Jornada"];
   $nombre=$line["Nombre_Jornada"];
   $horaEntrada=$line["Hora_entrada"];
   $horaSalida=$line["Hora_salida"];

   echo "\t<tr>\n";
   echo "\t\t<td>$codigo</td>\n";
   echo "\t\t<td>$nombre</td>\n";
   echo "\t\t<td>$horaEntrada</td>\n";
   echo "\t\t<td>$horaSalida</td>\n";
   echo "\t\t<td><a href=eliminar.php?codigo=$codigo><img src=../Imagenes/icon-remove.png></a></td>\n";
   echo "\t\t<td><a href=modificar_forma.php?codigo=$codigo&nombre=$nombre><img src=../Imagenes/icon-edit.jpg></a></td>\n";
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