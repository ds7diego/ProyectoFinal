<?php
  $mysqli = new mysqli('localhost', 'root', '', 'basesproyectofinal');
?>

<html>
  <head>
     <title>
        Aplicacion de Ejemplo
     </title>
  </head>
  <body>


   <form action="insertar_empleado.php" method="get">
      <b>Codigo:</b>
      <input type="text" name="codigo"><br>
      <b>Nombre:</b>
      <input type="text" name="nombre" length="20"><br>
      <b>Jornada:</b>
      <select name="jornada">
         <option value="0">Seleccione:</option>
         <?php
          $query = $mysqli -> query ("select * from Jornadas_Laborales order by Codigo_Jornada");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[Codigo_Jornada].'">'.$valores[Nombre_Jornada].'</option>';
          }
        ?>
      </select><br>
      <b>Departamento:</b>
      <select name="departamento">
         <option value="0">Seleccione:</option>
         <?php
          $query = $mysqli -> query ("select * from Departamento order by Codigo_Departamento");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[Codigo_Departamento].'">'.$valores[Nombre_Departamento].'</option>';
          }
        ?>
      </select><br>

      <input type="submit" name="submit" value="enviar">

   </form>
   <center>
      <a href="../index.html">regresar</a>
   </center>

  </body>
</html>
