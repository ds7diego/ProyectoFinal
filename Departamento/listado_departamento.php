<html>
  <head>
     <title>
        Listado Departamento
     </title>
  </head>
  <body>


<?php

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$query = "select * from Departamento order by Codigo_Departamento";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$codigo=0;
$nombre="";

echo "<table border=1>\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Codigo</b></th>\n";
echo "\t\t<th>Nombre</th>\n";
echo "\t\t<th colspan=\"2\">Acciones</th>\n";
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   $codigo=$line["Codigo_Departamento"];
   $nombre=$line["Nombre_Departamento"];

   echo "\t<tr>\n";
   echo "\t\t<td>$codigo</td>\n";
   echo "\t\t<td>$nombre</td>\n";
   echo "\t\t<td><a href=eliminar_departamento.php?codigo=$codigo><div style=\"width:10em; height:2em; width:2em;\"><img style=\"width:10em; height:2em; width:2em;\" src=../Imagenes/delete.png></div></a></td>\n";
   echo "\t\t<td><a href=modificar_departamento.php?codigo=$codigo&nombre=$nombre><div style=\"width:10em; height:2em; width:2em;\"><img style=\"width:10em; height:2em; width:2em;\" src=../Imagenes/edit.png></div></a></td>\n";
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
