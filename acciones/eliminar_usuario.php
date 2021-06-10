<?php 

require_once '../conexion/conexion.php';

//print_r($_GET);


$id_usuario = $_GET['id_usuario'];

//consulta para verificar el estatus del usuario
$consulta_usuario = "SELECT * FROM empleado WHERE codigo = '$id_usuario'";
$conexion_usuario = mysqli_query($mysqli,$consulta_usuario);
$fila = mysqli_fetch_array($conexion_usuario);

//variable de consulta mysql
//$consulta  = "DELETE FROM empleado WHERE codigo = '$id_usuario'";

if($fila['status'] == 1){
    $consulta  = "UPDATE empleado SET status = 0 WHERE codigo = '$id_usuario'";
}else{
    $consulta  = "UPDATE empleado SET status = 1 WHERE codigo = '$id_usuario'";
}

$conexion_eliminar = mysqli_query($mysqli, $consulta);

header("Location: http://localhost/empleadossm31/empleado/usuarios.php");

?>






