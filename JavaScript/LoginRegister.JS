let BotonRegistrar = document.getElementById("Registro");
let BotonIniciarSesion = document.getElementById("IniciarSesion");
let CampoNombre = document.getElementById("CampoNombre");
let BotonIngresar = document.getElementById("Ingresar");
let BotonRegistro = document.getElementById("Registrarse");
let Titulo = document.getElementById("Titulo")

BotonIniciarSesion.onclick = function(){
    CampoNombre.style.maxHeight = '0';
    Titulo.innerHTML = 'Iniciar Sesión';
    BotonRegistrar.classList.add('Disable');
    BotonIniciarSesion.classList.remove('Disable');
    BotonIngresar.classList.remove('Ocultar');
    BotonRegistro.classList.add('Ocultar');
}

BotonRegistrar.onclick = function(){
    CampoNombre.style.maxHeight = '60px';
    Titulo.innerHTML = 'Registrarse';
    BotonRegistrar.classList.remove('Disable');
    BotonIniciarSesion.classList.add('Disable');
    BotonRegistro.classList.remove('Ocultar');
    BotonIngresar.classList.add('Ocultar');
}

function validarFormulario() {
    var NombreCompleto = document.forms["miFormulario"]["Nombre_Completo"].value;
    var email = document.forms["miFormulario"]["Email"].value;
    var password = document.forms["miFormulario"]["Password"].value;

    if (email == "" || password == "") {
        alert("Todos los campos son obligatorios. Por favor, completa todos los campos.");
        return false;
    }
    return true;
}