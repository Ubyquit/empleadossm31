<?php 

require_once '../conexion/conexion.php';

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];

// Crear contraseña random
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
//https://code.tutsplus.com/es/tutorials/generate-random-alphanumeric-strings-in-php--cms-32132
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
 
// Output: iNCHNGzByPjhApvn7XBD
$password = generate_string($permitted_chars, 20);


//variable de consulta mysql
$consulta  = "INSERT INTO empleado(email, password, nombre, apellido1, apellido2, status,creacion)
VALUES ('$email', '$password', '$nombre', '$apellido1', '$apellido2', 1,NOW())";
$conexion = mysqli_query($mysqli, $consulta);


header("Location: ../empleado/usuarios.php ")

?>