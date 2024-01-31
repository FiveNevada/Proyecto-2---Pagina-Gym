<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
            alert("Primero debes iniciar sesion para ingresar");
            window.location = "LoginRegister.php";
        </script>';
        session_destroy();
        die();
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola, Bienvenido</h1>
    <a href="PHP/CerrarSesion.php">Cerrar sesion</a>
</body>
</html>