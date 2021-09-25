<html>
  <head>
     <title>
        Reporte - Empleado Marca
     </title>
  </head>
  <body>


<?php

$link = mysqli_connect('localhost', 'root', '','basesproyectofinal') or die('Could not connect: ' . mysqli_error());

$codigo=$_GET["codigo"];

$query_empleado = "SELECT e.Codigo_empleado, e.Nombre, j.Nombre_Jornada, j.Hora_entrada, j.Hora_salida, d.Codigo_Departamento, d.Nombre_Departamento FROM empleado e INNER JOIN jornadas_laborales j ON e.Codigo_Jornada = j.Codigo_Jornada INNER JOIN departamento d ON e.Codigo_Departamento = d.Codigo_Departamento WHERE e.codigo_empleado = $codigo";

$result_empleado = mysqli_query($link,$query_empleado) or die('Query failed: ' . mysqli_error($link));

$query = "SELECT DATE_FORMAT(M.fecha_marca, '%d/%m/%Y') Fecha_marca, @ENTRADA :=( SELECT DATE_FORMAT(Tiempo_marca, '%H:%i') FROM marca_empleado WHERE Codigo_empleado = E.Codigo_empleado AND Tipo_marca = 'ENTRADA' AND DATE_FORMAT(Fecha_marca, '%d%m%y') = DATE_FORMAT(M.Fecha_marca, '%d%m%y') ) AS ENTRADA, @SALIDA :=( SELECT DATE_FORMAT(Tiempo_marca, '%H:%i') FROM marca_empleado WHERE Codigo_empleado = E.Codigo_empleado AND Tipo_marca = 'SALIDA' AND DATE_FORMAT(Fecha_marca, '%d%m%y') = DATE_FORMAT(M.Fecha_marca, '%d%m%y') ) AS SALIDA, TIME_FORMAT( ( IF( TIMEDIFF(@SALIDA, @ENTRADA) < 0, 0 - TIMEDIFF(@SALIDA, @ENTRADA), TIMEDIFF(@SALIDA, @ENTRADA) ) ), '%H:%i' ) AS HORAS FROM marca_empleado M INNER JOIN EMPLEADO E ON M.CODIGO_EMPLEADO = E.Codigo_empleado WHERE M.Codigo_empleado = $codigo GROUP BY DATE_FORMAT(M.Fecha_marca, '%d/%m/%Y'), E.NOMBRE;";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$codigo=0;
$nombre="";

while ($line = mysqli_fetch_array($result_empleado, MYSQLI_ASSOC)) {
   $Codigo_empleado=$line["Codigo_empleado"];
   $Nombre=$line["Nombre"];
   $Codigo_Departamento=$line["Codigo_Departamento"];
   $Nombre_Departamento=$line["Nombre_Departamento"];
   $Nombre_Jornada=$line["Nombre_Jornada"];
   $Hora_entrada=$line["Hora_entrada"];
   $Hora_salida=$line["Hora_salida"];
}

echo "<p>Empleado: $Codigo_empleado - $Nombre</p>\n";
echo "<p>Departamento: $Codigo_Departamento - $Nombre_Departamento</p>\n";
echo "<p>Jornada: $Nombre_Jornada de $Hora_entrada a $Hora_salida</p>\n";

echo "<table border=1>\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Fecha</b></th>\n";
echo "\t\t<th>Entrada</th>\n";
echo "\t\t<th>Salida</th>\n";
echo "\t\t<th>Horas</th>\n";
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   $Fecha_marca=$line["Fecha_marca"];
   $ENTRADA=$line["ENTRADA"];
   $SALIDA=$line["SALIDA"];
   $HORAS=$line["HORAS"];

   echo "\t<tr>\n";
   echo "\t\t<td>$Fecha_marca</td>\n";
   echo "\t\t<td>$ENTRADA</td>\n";
   echo "\t\t<td>$SALIDA</td>\n";
   echo "\t\t<td>$HORAS</td>\n";
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
