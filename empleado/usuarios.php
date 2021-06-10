<?php

session_start();

require_once '../conexion/conexion.php';

$varsession = $_SESSION["ID"];
$nombre = $_SESSION["NOMBRE"];

if ($varsession == '' || $varsession == NULL) {
    echo "Usted no tiene permisos de acceso, por favor inicie sesión";
    header("Location: ../index.html");
    die();
}

?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--https://fontawesome.com/v4.7/icons/-->
    <script src="https://use.fontawesome.com/5001448291.js"></script>
    <title>Panel de usuarios</title>
</head>

<body>
    <!--Inicio de Navbar-->
    <?php include "../include/navbar.php"; ?>
    <!--Final de Navbar-->
    <div class="container">
        <h3>Panel de usuarios</h3>

        <div>
            <a class="btn btn-primary" href="../acciones/insertar_usuario.php" role="button">Crear nuevo usuario</a>
        </div>
        <br>
        <form class="d-flex" action="" method="POST">
            <input class="form-control me-2" type="search" placeholder="Buscar" name="search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <br>
    </div>
    <!--Inicio tabla de usuarios-->
    <?php include "../include/tabla_usuarios.php"; ?>
    <!--Final tabla de usuarios-->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>