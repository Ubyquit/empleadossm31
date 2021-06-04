<?php 
    $server = "localhost";
    $user = "ubyquit";
    $password = "Holamundo2017";
    $database = "empleados";
    
    $mysqli = mysqli_connect($server,$user,$password,$database);

    if(mysqli_connect_errno($mysqli)){
            echo "no pude conectarme a la base de datos"." ".mysqli_connect_error();
        }else{
           // echo "si me pude conectar";
        }
?>