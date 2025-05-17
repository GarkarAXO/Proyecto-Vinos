<?php
    error_reporting(0);
    include ('conexion.php');

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena']; 

    
    //verificar que el correo no se repita en la BD
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo'");
    $ver_correo = mysqli_num_rows($verificar_correo);
    if($ver_correo > 0){
        echo '
            <script>
                alert("Este correo ya esta registrador, intenta con otro diferente");
                window.location = "../login_registro.php";
            </script>
        ';
        exit;
    }

    //verificar que el usuario no se repita en la BD
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario'");    
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya esta registrador, intenta con otro diferente");
                window.location = "../login_registro.php";
            </script>
        ';
        exit;
    }

     // registrando usuarios
     $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
                            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script> 
                alert("Usuario registrado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
        <script> 
            alert("No se pudo registrar su usuario");
            window.location = "../login_registro.php";
        </script> 
        ';
    }
    mysqli_close($conexion);
?>