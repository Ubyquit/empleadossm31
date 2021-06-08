<?php 

require_once '../conexion/conexion.php';

$id_usuario = $_GET['id_usuario'];

//variable de consulta mysql
//$consulta  = "DELETE FROM empleado WHERE codigo = '$id_usuario'";
$consulta  = "UPDATE empleado SET status = 0 WHERE codigo = '$id_usuario'";

$conexion_eliminar = mysqli_query($mysqli, $consulta);

header("Location: http://localhost/empleadossm31/empleado/usuarios.php");

?>






