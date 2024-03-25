<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenido.php");
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> Inicio de sesión </title>
        <link rel="stylesheet" href="\style.css">
    </head>
<body>
    <section class="form-login">
            <h5> Inicio de sesión </h5>
            <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
            <input class="controls" type="password" name="password" value="" placeholder="Contraseña">
            <input class="buttons" type="submit" name="" value="Ingresar">
            <p><a href ="#"> ¿Olvidaste tu contraseña? </a></p>
        </section>
    </body>
</html>
