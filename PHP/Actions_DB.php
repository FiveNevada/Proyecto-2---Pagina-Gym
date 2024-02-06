<?php 
session_start();

include 'Connection_BD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre_Completo = $_POST['Nombre_Completo'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    // Aplicar encriptacion
    $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

    if (isset($_POST["Registrarse"])) {
        $VerificarCorreo = mysqli_query($Connection, "SELECT * FROM users WHERE email='$Email'");
        
        if(mysqli_num_rows($VerificarCorreo) > 0){
            echo '
            <script>
                alert("Este correo ya está registrado");
                window.location = "../LoginRegister.php";
            </script>';
            exit();
        }

        $query = "INSERT INTO users(nombre, email, pass) VALUES('$Nombre_Completo', '$Email', '$hashedPassword')";
        $Ejecutar = mysqli_query($Connection, $query);

        if ($Ejecutar) {
            echo '
            <script>
                alert("Registrado con éxito");
                window.location = "../LoginRegister.php";
            </script>';
        } else {
            echo '
            <script>
                alert("Error al registrar usuario");
                window.location = "../LoginRegister.php";
            </script>';
        }
    }

    elseif (isset($_POST["Ingresar"])) {
        $query = "SELECT pass FROM users WHERE email='$Email'";
        $resultado = mysqli_query($Connection, $query);
        $fila = mysqli_fetch_assoc($resultado);
    
        if ($fila !== null && isset($fila['pass'])) {
            $hashAlmacenado = $fila['pass'];
    
            if (password_verify($Password, $hashAlmacenado)) {
                $_SESSION['usuario'] = $Email;
                header('location: ../Index.php');
                exit;
            } else {
                echo '
                <script>
                    alert("Contraseña incorrecta");
                    window.location = "../LoginRegister.php";
                </script>';
            }
        } else {
            echo '
            <script>
                alert("Usuario no existe");
                window.location = "../LoginRegister.php";
            </script>';
        }
    }
    

    mysqli_close($Connection);
}
?>
