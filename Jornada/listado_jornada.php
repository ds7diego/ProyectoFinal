<html>
  <head>
     <title>
        Listado Departamento
     </title>
  </head>
  <body>


<?php

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$query = "select * from Jornadas_Laborales order by Codigo_Jornada";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$codigo=0;
$nombre="";
$horaEntrada="";
$horaSalida="";

echo "<table border=1>\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Codigo</b></th>\n";
echo "\t\t<th>Nombre</th>\n";
echo "\t\t<th>Hora Entrada</th>\n";
echo "\t\t<th>Hora Salida</th>\n";
echo "\t\t<th colspan=\"2\">Acciones</th>\n";
echo "\t</tr>\n";


while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   $codigo=$line["Codigo_Jornada"];
   $nombre=$line["Nombre_Jornada"];
   $horaEntrada=$line["Hora_entrada"];
   $horaSalida=$line["Hora_salida"];
   $nombreParametro=str_replace(" ", "%20",$nombre );

   echo "\t<tr>\n";
   echo "\t\t<td>$codigo</td>\n";
   echo "\t\t<td>$nombre</td>\n";
   echo "\t\t<td>$horaEntrada</td>\n";
   echo "\t\t<td>$horaSalida</td>\n";
   echo "\t\t<td><a href=eliminar_jornada.php?codigo=$codigo><div style=\"width:10em; height:2em; width:2em;\"><img style=\"width:10em; height:2em; width:2em;\" src=../Imagenes/delete.png></div></a></td>\n";
   echo "\t\t<td><a href=modificar_jornada.php?codigo=$codigo&nombre=%27$nombreParametro%27&horaEntrada=$horaEntrada&horaSalida=$horaSalida><div style=\"width:10em; height:2em; width:2em;\"><img style=\"width:10em; height:2em; width:2em;\" src=../Imagenes/edit.png></div></a></td>\n";
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
