<div class="container-md">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">AP</th>
                <th scope="col">AM</th>
                <th scope="col">Email</th>
                <th scope="col">NIF</th>
                <th scope="col">Departamento</th>
                <th scope="col">Estatus</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Variable Buscador
            $buscador = $_POST['search'];
            //variable de consulta mysql
            $consulta  = "SELECT 
            empleado.nombre as nombre_usuario,
            empleado.codigo as codigo_empleado,
            apellido1, 
            apellido2, 
            email, 
            nif, 
            status,
            departamento.nombre as departamento
            FROM empleado 
            left join departamento 
            on empleado.codigo_departamento = departamento.codigo 
            WHERE empleado.nombre like '%$buscador%'
            or empleado.apellido1 like '%$buscador%'
            or empleado.apellido2 like '%$buscador%'
            or empleado.email like '%$buscador%'";
            $conexion = mysqli_query($mysqli, $consulta);
            $contador = 1;
            while ($fila = mysqli_fetch_array($conexion)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $contador; ?></th>
                    <td><?php echo $fila['nombre_usuario']; ?></td>
                    <td><?php echo $fila['apellido1']; ?></td>
                    <td><?php echo $fila['apellido2']; ?></td>
                    <td><?php echo $fila['email']; ?></td>
                    <td><?php echo $fila['nif']; ?></td>
                    <td><?php echo $fila['departamento']; ?></td>
                    <td><?php
                        if ($fila['status'] == 1) {
                            echo "activo";
                        } else {
                            echo "inactivo";
                        }
                        ?>
                    </td>
                    <td><a href="../acciones/eliminar_usuario.php?id_usuario=<?php echo $fila['codigo_empleado']; ?>"><span style="font-size: 1em; color: red;"><i class="fa fa-lock" aria-hidden="true"></i></span></a></td>
                </tr>
            <?php
                $contador++;
            }
            ?>
        </tbody>
    </table>
</div>