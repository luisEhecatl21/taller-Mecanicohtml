<?php
    require ('../conexion/conexion.php');

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO cliente (Nombre, Telefono, Direccion, Correo) VALUES ('$nombre','$telefono', '$direccion', '$correo')";

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){    
        header("Location:http://localhost/tallerMecanico/control.php");
    }else{
        echo "lo siento";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>