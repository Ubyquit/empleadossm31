<?php
    require_once '../conexion/conexion.php';

    //print_r($_POST);

    $email = $_POST['email'];
    $password = $_POST['password'];

    //variable de consulta mysql
    $consulta  = "SELECT * FROM empleado WHERE email  = '$email' and password = '$password' and status = 1";
    $conexion = mysqli_query($mysqli, $consulta);
    $fila = mysqli_fetch_array($conexion);

    if(sizeof($fila) > 0 ){
        if($fila['password'] == $password){
            session_start();

            $_SESSION["ID"] = $fila["codigo"];
            $_SESSION["EMAIL"] = $fila["email"];
            $_SESSION["NOMBRE"] = $fila["nombre"];
            $_SESSION["STATUS"] = $fila["status"];

            $respuesta = 1;

        }else{
            echo "La contraseña es incorrecta";
        }

    }else{
        echo "El usuario es incorrecto";
    }

    if($respuesta == 1){
        header("Location: ../empleado/index.php");
    }else{
        header("Location: ../index.html");
    }

?>