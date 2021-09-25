<html>

<head>
    <title>
        Permiso - Insertar
    </title>
</head>

<body>
    <?php

    echo '<form action="insertar.php" method="get">';
    echo '<b>Codigo Permiso:</b>';
    echo '<input type="text" name="codigoPermiso"><br>';
    echo '<b>Empleado:</b>';
    echo '<select name="empleado">';
    echo '<option value="0">Seleccione:</option>';
    $mysqli = new mysqli('localhost', 'root', '', 'basesproyectofinal');
   $query = $mysqli -> query ("select * from Empleado order by Codigo_empleado");
   while ($valores = mysqli_fetch_array($query)) {
     echo '<option value="'.$valores[Codigo_empleado].'">'.$valores[Nombre].'</option>';
   }
   echo '</select><br>';
   echo '<b>Fecha:</b>';
   echo '<input type="date" name="fecha" value="<?php echo date(\'Y-m-d\'); ?>" /><br>';
   echo '<b>Motivo:</b>';
   echo '<input type="text" name="motivo" length="50"><br>';
   echo '<input type="submit" name="submit" value="enviar">';     
   echo '</form>';
    ?>
    <center>
        <a href="../index.html">regresar</a>
    </center>
</body>

</html>