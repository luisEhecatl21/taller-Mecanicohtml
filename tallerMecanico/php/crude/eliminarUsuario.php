<?php
    require ('../conexion/conexion.php');

    $id = $_GET["id"];
    $id = (int)$id;

    $sql = "DELETE FROM cliente WHERE Identificador =".$id;

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        header("Location:http://localhost/tallerMecanico/control.php");    
    }else{
        echo "lo siento";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>