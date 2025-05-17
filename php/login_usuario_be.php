<?php

    session_start();
    error_reporting(0);

    include 'conexion.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $usuario;
        header("location: ../index.php");
        exit;
    }else{
        echo '
            <script>
                alert("El usuario no existe, por favor verifique los datos");
                window.location = "../login_registro.php";
            </script>
        ';
        exit;
    }
?>