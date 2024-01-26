let BotonRegistrar = document.getElementById("Registro");
let BotonIniciarSesion = document.getElementById("IniciarSesion");
let CampoNombre = document.getElementById("CampoNombre");
let Titulo = document.getElementById("Titulo")

BotonIniciarSesion.onclick = function(){
    CampoNombre.style.maxHeight = '0';
    Titulo.innerHTML = 'Iniciar Sesión';
    BotonRegistrar.classList.add('Disable');
    BotonIniciarSesion.classList.remove('Disable');
}

BotonRegistrar.onclick = function(){
    CampoNombre.style.maxHeight = '60px';
    Titulo.innerHTML = 'Registrarse';
    BotonRegistrar.classList.remove('Disable');
    BotonIniciarSesion.classList.add('Disable');
}