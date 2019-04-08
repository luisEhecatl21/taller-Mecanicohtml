<?php
    require ('../conexion/conexion.php');
    session_start();

    $_SESSION['usuario'] = 'adiministrador';

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];


    $consulta = "SELECT * FROM administrador WHERE correo='$correo'";

    $resultado=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);

        if($filas>0){
        $_SESSION['usuario'] = $correo;
        header("Location:http://localhost/tallerMecanico/control.php");   
    }else{
        header("Location:http://localhost/tallerMecanico/iniciarSesion.php");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>