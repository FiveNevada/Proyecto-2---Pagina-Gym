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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/Index.CSS">
    <link rel="stylesheet" href="CSS/Footer.CSS">
    <script src="https://kit.fontawesome.com/bf924a6af6.js" crossorigin="anonymous"></script>
    <title>Inicio - ProgressFitness</title>
</head>
<body class="vh-100">
    <!-- NAVBAR MENU -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand fs-4" href="#">ProgressFitness</a>
                <!-- BOTON TOGGLE -->
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!-- SIDEBAR -->
                <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <!-- SIDEBAR HEADER -->
                    <div class="offcanvas-header text-white border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ProgressFitness</h5>
                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- SIDEBAR BODY -->
                    <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                        <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#Inicio">Inicio</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#Beneficios">Beneficios</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#Membresias">Membresías</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#Contacto">Contacto</a>
                            </li>
                        </ul>
                        <!-- CERRAR SESION / PERFIL -->
                        <div class="d-flex flex-column justify-content-center flex-lg-row align-items-center gap-3">
                            <a href="Perfil.PHP" class="text-white">Perfil</a>
                            <a href="PHP/CerrarSesion.php" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: #f94ca4">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="Inicio">
            <div id="carouselE1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="1" class="active" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="2" class="active" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/Central.png" class="d-block w-100 h-2000" alt="Playstation 5">
                        <div class="carousel-caption">
                            <h5>Instalaciones</h5>
                            <p>Descubre un mundo de posibilidades en nuestro gimnasio, donde te ofrecemos una amplia variedad de máquinas diseñadas para potenciar tu rutina de ejercicios.</p>
                            <p><a href="#" class="btn btn-primary mt-3">Leer Mas</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Ejemplo.jpg" class="d-block w-100 h-2000" alt="Playstation 5">
                        <div class="carousel-caption">
                            <h5>Peso Libre</h5>
                            <p>Nuestra zona de peso libre está equipada con una variedad de pesas y equipos para fortalecer todos los grupos musculares. Disfruta de un ambiente dedicado al levantamiento de pesas, ideal para aquellos que buscan desafiar y tonificar su cuerpo.</p>
                            <p><a href="#" class="btn btn-primary mt-3">Leer Mas</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Secundaria.jpg" class="d-block w-100 h-2000" alt="Playstation 5">
                        <div class="carousel-caption">
                            <h5>Ambiente</h5>
                            <p>Tu comodidad y seguridad son nuestra prioridad, brindándote la confianza necesaria para alcanzar tus metas fitness. Únete a nosotros y experimenta un entorno donde el respeto y la motivación se entrelazan para crear una experiencia única.</p>
                            <p><a href="#" class="btn btn-primary mt-3">Leer Mas</a></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselE1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselE1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        
        <section id="Beneficios">
            <div class="container px-4 py-5" id="icon-grid">
                <h2 class="pb-2 border-bottom">BENEFICIOS</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                    <div class="col d-flex align-items-start">
                        <i class="fa-solid fa-carrot text-body-secondary me-3" style="font-size: 1.75em;"></i>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Plan Alimenticio</h3>
                            <p>Ofrece asesoramiento nutricional personalizado para complementar tu régimen de ejercicios y alcanzar tus metas de salud.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <i class="fa-solid fa-user text-body-secondary me-3" style="font-size: 1.75em;"></i>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Asistencia Profesional</h3>
                            <p>Cuenta con entrenadores altamente capacitados para brindar orientación y apoyo personalizado durante tus sesiones de entrenamiento.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <i class="fa-solid fa-dumbbell text-body-secondary me-3" style="font-size: 1.75em;"></i>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Área de Peso Libre</h3>
                            <p> Equipada con una zona de pesas libres para entrenamientos de fuerza y desarrollo muscular.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <i class="fa-solid fa-bottle-droplet text-body-secondary me-3" style="font-size: 1.75em;"></i>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Área de Bebidas</h3>
                            <p>Dispone de un área para mantenerse hidratado con opciones de bebidas saludables y refrescantes.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <i class="fa-solid fa-bath text-body-secondary me-3" style="font-size: 1.75em;"></i>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Área de Duchas</h3>
                            <p>Instalaciones limpias y cómodas con duchas para que puedas refrescarte después de tu sesión de ejercicios.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <i class="fa-solid fa-stethoscope text-body-secondary me-3" style="font-size: 1.75em;"></i>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Asistencia Médica</h3>
                            <p>Proporciona servicios de asistencia médica para abordar cualquier preocupación de salud relacionada con el ejercicio.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <i class="fa-solid fa-spa text-body-secondary me-3" style="font-size: 1.75em;"></i>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Área de Spa</h3>
                            <p>Un espacio diseñado para relajarse y recuperarse, ofreciendo servicios de spa para mimar tu cuerpo después del entrenamiento.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <i class="fa-solid fa-person-swimming text-body-secondary me-3" style="font-size: 1.75em;"></i>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Natación</h3>
                            <p>Piscina disponible para aquellos que buscan diversificar su rutina de ejercicios con actividades acuáticas beneficiosas para la salud.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Membresias" class="container px-4">
            <h2 class="pb-2 border-bottom">MEMBRESÍAS</h2>
            <div class="row row-cols-1 row-cols-md-3 mb-3 py-5 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Casual</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$90<small class="text-body-secondary fw-light">/mes</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Plan Alimenticio</li>
                                <li>Horario de 10 AM a 17 PM</li>
                                <li>Área de Duchas</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg Custom-btn">SELECCIONAR</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Estándar</h4>
                        </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$150<small class="text-body-secondary fw-light">/mes</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Área de Spa</li>
                            <li>Área de Bebidas</li>
                            <li>Horario Abierto</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg Custom-btn">SELECCIONAR</button>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Avanzada</h4>
                        </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$200<small class="text-body-secondary fw-light">/mes</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Clases de Natación</li>
                            <li>Asistencia Profesional</li>
                            <li>Beneficios Anteriores</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg Custom-btn">SELECCIONAR</button>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="About">
            <div class="Opiniones px-4">
                <div class="OpinionesIzquierda">
                    <h1>Lo que nuestros clientes opinan de nosotros</h1>
                    <p>
                        En nuestro gimnasio, valoramos profundamente la retroalimentación de nuestros clientes. Tus opiniones no solo nos ayudan a mejorar constantemente, sino que también inspiran y motivan a otros a unirse a nuestra comunidad. Creemos en construir juntos un espacio donde cada voz cuenta y cada experiencia contribuye al éxito colectivo. Comparte tu perspectiva; nos importa y estamos aquí para escucharte en cada paso de tu viaje con nosotros.
                    </p>
                    <button>Mirar opiniones</button>
                </div>
                <div class="OpinionesDerecha">
                    <div class="Card">
                        <img src="Images/Perfil1.png" alt="Usuario">
                        <div class="Card_Contenido">
                            <span><i class="fa-solid fa-quote-left"></i></span>
                            <div class="Card_Detalles">
                                <p>Excelente variedad de equipos y clases, el personal es amable y siempre dispuesto a ayudar. Las instalaciones están limpias y bien mantenidas, lo que hace que mi experiencia de entrenamiento sea cómoda y motivadora.</p>
                                <h4>- Jesus Rodriguez</h4>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="Images/Perfil2.jpg" alt="Usuario">
                        <div class="Card_Contenido">
                            <span><i class="fa-solid fa-quote-left"></i></span>
                            <div class="Card_Detalles">
                                <p>El gimnasio tiene un ambiente acogedor y comunitario. Me encanta la diversidad de programas de entrenamiento y eventos especiales que ofrecen. Además, la atención personalizada de los entrenadores hace que cada sesión de ejercicios sea única y efectiva.</p>
                                <h4>- Andre Gignac</h4>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="Images/Perfil3.jpg" alt="Usuario">
                        <div class="Card_Contenido">
                            <span><i class="fa-solid fa-quote-left"></i></span>
                            <div class="Card_Detalles">
                                <p>Increíble relación calidad-precio. Este gimnasio ofrece una amplia gama de servicios, desde modernos equipos de entrenamiento hasta clases grupales emocionantes. Además, la flexibilidad de horarios me permite adaptar mi rutina de ejercicios a mi apretada agenda.</p>
                                <h4>- Luis Lopez</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
    </main>
    
    <script src="JavaScript/Index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>