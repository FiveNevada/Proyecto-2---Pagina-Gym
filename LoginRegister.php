<?php 
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: Index.php");
    }


?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/LoginRegister.CSS">
    <script src="https://kit.fontawesome.com/bf924a6af6.js" crossorigin="anonymous"></script>
    <title>Bienvenido</title>
</head>
<body>
    <div class="ContenedorLogin">
        <div class="Welcome-Back">
            <div class="Contenedor-Nombre">
                <p>Progress Fitness</p>
            </div>
        </div>
        <div class="Login-Register">
            <div class="Formulario">
                <h1 id="Titulo">Registrarse</h1>
                <form action="PHP/Actions_DB.php" method="POST" name="miFormulario" onsubmit="return validarFormulario()">
                    <div class="Campo-Boton">
                        <button type="button" id="Registro">Registrarse</button>
                        <button type="button" id="IniciarSesion" class="Disable">Iniciar Sesión</button>
                    </div>
                    <div class="Grupo-Entradas">
                        <div class="Campo-Entradas" id="CampoNombre">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Nombre" name="Nombre_Completo">
                        </div>

                        <div class="Campo-Entradas" id="CampoCorreo">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="Correo Electrónico" name="Email">
                        </div>

                        <div class="Campo-Entradas" id="CampoClave">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Contraseña" name="Password">
                        </div>
                        <p>Olvidaste tu contraseña? <a href="#">Haz click aqui!</a></p>
                    </div>

                    <div class="Boton-Accion">
                        <button type="submit" id="Ingresar" name="Ingresar" class="Ocultar">Iniciar Sesión</button>
                        <button type="submit" id="Registrarse" name="Registrarse" >Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="JavaScript/LoginRegister.JS"></script>
</body>
</html>