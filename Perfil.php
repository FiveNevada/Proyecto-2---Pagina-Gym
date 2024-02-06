<?php
    session_start();

    // Obtener el nombre de usuario de la sesión
    $usuario = $_SESSION['usuario'];

    // Conectar a la base de datos
    include 'PHP/Connection_BD.php';

    // Obtener la información del usuario de la base de datos
    $query = "SELECT nombre, email FROM users WHERE email='$usuario'";
    $resultado = mysqli_query($Connection, $query);

    // Extraer los datos del usuario
    $fila = mysqli_fetch_assoc($resultado);
    $nombre = $fila['nombre'];
    $correo = $fila['email'];

    // Cerrar la conexión a la base de datos
    mysqli_close($Connection);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/Perfil.CSS">
    <script src="https://kit.fontawesome.com/bf924a6af6.js" crossorigin="anonymous"></script>
    <title>Perfil</title>
</head>
<body class="vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand fs-4" href="Index.php">ProgressFitness</a>
                <!-- BOTON TOGGLE -->
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!-- SIDEBAR -->
                <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <!-- SIDEBAR HEADER -->
                    <div class="offcanvas-header text-white border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a href="Index.PHP">ProgressFitness</a></h5>
                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- SIDEBAR BODY -->
                    <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                        <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Perfil</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#">Membresías</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#">Método de Pago</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#">Configuración</a>
                            </li>
                        </ul>
                        <!-- CERRAR SESION / PERFIL -->
                        <div class="d-flex flex-column justify-content-center flex-lg-row align-items-center gap-3">
                            <a href="PHP/CerrarSesion.php" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: #f94ca4">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="Perfil-Informacion">
            <div class="Perfil">
                <h1>Bienvenido <?php echo $nombre; ?></h1>
                <form action="PHP/Procesar-Actualizacion.php" method="POST">
                    <div class="InputBox">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="min-width: 180px;">Nombre de Usuario</span>
                            <input type="text" class="form-control" placeholder="<?php echo $nombre; ?>" aria-label="Username" aria-describedby="basic-addon1" wfd-id="id0" name="UsuarioNuevo" style="width: 450px;">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="min-width: 180px;">Correo</span>
                            <input type="text" class="form-control" placeholder="<?php echo $correo; ?>" aria-label="Email" aria-describedby="basic-addon1" wfd-id="id0" name="CorreoNuevo">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="min-width: 180px;">Contraseña</span>
                            <input type="password" class="form-control" placeholder="Contraseña Anterior" aria-label="Password" aria-describedby="basic-addon1" wfd-id="id0" name="PassAnterior">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="min-width: 170px;">Confirmar Contraseña</span>
                            <input type="password" class="form-control" placeholder="Contraseña Nueva" aria-label="Password" aria-describedby="basic-addon1" wfd-id="id0" name="PassNueva">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-center" type="submit">Actualizar Datos</button>
                </form>
            </div>
        </section>
    </main>
    <footer id="Contacto" class="Contacto">
        <div class="Contacto-Informacion">
            <div class="Row">
                <div class="Col">
                    <h4>Negocio</h4>
                    <ul>
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Nuestros Servicios</a></li>
                        <li><a href="#">Politica de privacidad</a></li>
                    </ul>
                </div>
                <div class="Col">
                    <h4>Ayuda</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Devoluciones</a></li>
                        <li><a href="#">Opciones de pago</a></li>
                    </ul>
                </div>
                <div class="Col">
                    <h4>Productos</h4>
                    <ul>
                        <li><a href="#">Ropa deportiva</a></li>
                        <li><a href="#">Accesorios</a></li>
                        <li><a href="#">Proteina</a></li>
                    </ul>
                </div>
                <div class="Col">
                    <h4>Nuestras Redes Sociales</h4>
                    <div class="Redes">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>