<?php
session_start();
$usuario = $_SESSION['usuario'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST['UsuarioNuevo']; 
    $correoNuevo = $_POST['CorreoNuevo'];
    $contrasenaAnterior = $_POST['PassAnterior'];
    $contrasenaNueva = $_POST['PassNueva'];

    include 'Connection_BD.php';

 // Verificar la contraseña actual
$query = "SELECT pass FROM users WHERE email='$usuario'";
$resultado = mysqli_query($Connection, $query);
$fila = mysqli_fetch_assoc($resultado);

if ($fila !== null && isset($fila['pass'])) {
    $contrasenaActualDB = $fila['pass'];

    if (password_verify($contrasenaAnterior, $contrasenaActualDB)) {
        // Contraseña actual es correcta
        $query = "SELECT * FROM users WHERE email='$correoNuevo' AND email<>'$usuario'";
        $resultado = mysqli_query($Connection, $query);

        if (mysqli_num_rows($resultado) == 0) {
            // El nuevo correo no existe, proceder con la actualización
            $hashedNuevaContrasena = password_hash($contrasenaNueva, PASSWORD_DEFAULT);

            $query = "UPDATE users SET nombre='$Nombre', email='$correoNuevo', pass='$hashedNuevaContrasena' WHERE email='$usuario'";
            $resultado = mysqli_query($Connection, $query);

            if ($resultado) {
                // Actualización exitosa

                $_SESSION['usuario'] = $correoNuevo;

                echo '
                <script>
                    alert("Datos actualizados correctamente.");
                    window.location = "../Perfil.php";
                </script>';
            } else {
                echo '
                <script>
                    alert("Error al actualizar los datos.");
                    window.location = "../Perfil.php";
                </script>';
            }
        } else {
            echo '
            <script>
                alert("El nuevo correo ya está en uso, por favor selecciona otro.");
                window.location = "../Perfil.php";
            </script>';
        }
    } else {
        echo '
        <script>
            alert("La contraseña actual es incorrecta.");
            window.location = "../Perfil.php";
        </script>';
    }
} else {
    echo '
    <script>
        alert("Ha ocurrido un error con la Base de Datos.");
        window.location = "../Perfil.php";
    </script>';
}

mysqli_close($Connection);
}
?>
