<?php
session_start();

$varsession = $_SESSION["ID"];

if ($varsession == '' || $varsession == NULL) {
    echo "Usted no tiene permisos de acceso, por favor inicie sesión";
    header("Location: ../index.html");
    die();
}

session_destroy();

 header("Location: ../index.html");

?>