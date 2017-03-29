<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    <?php
      include "dbNBA.php";
      $nba= new dbNBA();
      ?>
  </head>
  <body class="frontal">
    <form class="" action="insertarDB.php" method="post">
      <div class="container">
          <div class="codrops-top">
            <a href="">
            </a>
            <span class="right">

            </span>
            <div class="clr"></div>
        </div>
        <header>
            <h1>NBA</h1>
        </header>
        <div id="container_demo" >
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="procesarLogin.php" autocomplete="on" method="post">
                        <h1>Insertar un equipo</h1>
<!--NOMBRE-->
        <label for="username" class="uname" data-icon="u"> Nombre </label><br>
          <input type="text" name="nombre">

<!--CIUDAD-->
      <label for="username" class="uname" data-icon="u"> Ciudad </label><br>
        <input type="text" name="ciudad">

<!--CONFERENCIA-->
      <label for="username" class="uname" data-icon="u" > Conferencia </label><br>
        <input type="text" name="conferencia">

<!--DIVISION-->
      <label for="username" class="uname" data-icon="u" > Division </label><br>
      <input type="text" name="division">

<!--BOTON INSERTAR-->
        <p class="login button">
            <input type="submit" value="insertar" />
        </p>

    </form>
  </body>
</html>
