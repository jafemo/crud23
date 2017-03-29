<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario actualizar equipo</title>
  </head>
  <body>
    <form action="actualizarDB.php" method="post">
      Nombre: <br>
      <input type="text" name="nombre" value=<?=$_GET["nombre"]?> readonly><br>
      Ciudad: <br>
      <input type="text" name="ciudad" value=<?=$_GET["ciudad"]?>><br>
      Conferencia: <br>
      <input type="text" name="conferencia" value=<?=$_GET["conferencia"]?>><br>
      Division: <br>
      <input type="text" name="division" value=<?=$_GET["division"]?>><br>
      <input type="submit" value="Registrar"><br>
    </form>
  </body>
</html>
