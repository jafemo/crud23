<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insercion de nuevos equipos</title>
  </head>
  <body>
    <?php
    //MIRAMOS A VER SI SE HAN RELLENADO LOS CAMPOS
    if (empty($_POST["nombre"])==false && empty($_POST["ciudad"])==false && empty($_POST["conferencia"])==false && empty($_POST["division"])==false) {

      //INICIAMOS LA BASE DE DATOS
      include 'dbnba.php';
      $equipo=new dbnba();

      //LLAMAMOS A LA FUNCION DE INSERCCION
      $resultado=$equipo->Insertarequipo($_POST["nombre"],  $_POST["ciudad"], $_POST["conferencia"], $_POST["division"]);

      //LE DECIMOS QUE NOS MUESTRE EL ULTIMO EQUIPO FILTRADO
      echo "ULTIMO REGISTRO: <br>";
      $tablaequipo=$equipo->DevolverEquipoNombre($_POST["nombre"]);
      foreach ($tablaequipo as $fila) {
        echo "Nombre: " .$fila["Nombre"] ."<br>Ciudad: " .$fila["Ciudad"] ."<br>Conferencia: " .$fila["Conferencia"] ."<br>Division: " .$fila["Division"];
      }

      //ESTE ES EL ENLACE PARA DEVOLVER EL ACTUALIZADO
      echo "<br>";
      echo "<a href='actualizar.php?nombre=".$fila["Nombre"]."&ciudad=".$fila["Ciudad"]."&conferencia=".$fila["Conferencia"]."&division=".$fila["Division"]."'>Actualizar registro.</a>";

      //Y ESTE EL DE BORRAR EL EQUIPO
      echo "<br>";
      echo "<a href='listaequipos.php'>Borrar registro.</a>";
    }else {
      echo "<a href='index.php'> Tienes que rellenar los campos </a>";
    }
     ?>
  </body>
</html>
