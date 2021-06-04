<?php 
    
    $consulta  = "SELECT COUNT(codigo) as usuarios FROM empleado";
    $conexion = mysqli_query($mysqli, $consulta);
    $usuarios = mysqli_fetch_array($conexion);

    $consulta1  = "SELECT COUNT(codigo) as activos FROM empleado WHERE status = 1";
    $conexion1 = mysqli_query($mysqli, $consulta1);
    $activos = mysqli_fetch_array($conexion1);

    $consulta2  = "SELECT COUNT(codigo) as inactivos FROM empleado WHERE status = 0";
    $conexion2 = mysqli_query($mysqli, $consulta2);
    $inactivos = mysqli_fetch_array($conexion2);

?>
<div class="card-group">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Usuario</div>
        <div class="card-body text-primary">
            <h5 class="card-title"><?php echo $usuarios['usuarios'];?></h5>
            <a href="usuarios.php" class="btn btn-primary">Ir a los usuarios</a>
        </div>
    </div>
    <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Activos</div>
        <div class="card-body text-success">
            <h5 class="card-title"><?php echo $activos['activos'];?></h5>
            <a href="usuarios_activos.php" class="btn btn-success">Usuarios activos</a>
        </div>
    </div>
    <div class="card border-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Inactivos</div>
        <div class="card-body text-danger">
            <h5 class="card-title"><?php echo $inactivos['inactivos'];?></h5>
            <a href="usuarios_inactivos.php" class="btn btn-danger">Usuarios inactivos</a>
        </div>
    </div>
</div>