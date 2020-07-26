<?php require_once("includes/" . "inc_header.php");
require_once("app/funcion.php");

?>

<!--Contenido-->
<div class="container-fluid">
    <h1 class="text-center">Tabla Clientes</h1>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">Nº Empleado</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Direccion</th>
                <th scope="col">DNI</th>
                <th scope="col">Poblacion</th>
                <th scope="col">Edad</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach (select_client() as $f) {
            ?>
                <tr class="text-center">
                    <td><?php echo $f["id"]; ?> </td>

                    <td><?php echo $f["Nombre"]; ?> </td>
                    <td><?php echo $f["Apellidos"]; ?> </td>
                    <td><?php echo $f["Telefono"]; ?> </td>
                    <td><?php echo $f["Correo"]; ?> </td>

                    <td><?php echo  $f["Dirección"] ?></td>
                    <td><?php echo $f["DNI"] ?></td>
                    <td><?php echo $f["Población"] ?></td>
                    <td><?php echo $f["Edad"] ?></td>

                    <td>
                        <!--Modal para actualizar-->
                        <input type='hidden' value="<?php echo $f['id'] ?>" name="id">
                        <button type="submit" class="update" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-pen-square"></i></button>

                        <!--Modal para borrar-->
                        <button type="submit" class="borrar" data-toggle="modal" data-target="#exampleModa2"><i class="fas fa-times-circle"></i></button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <?php
    include("includes/update_modal.php");
    include("includes/insertar_clientes.php");
    include("includes/delete_modal.php");
    ?>

    <!--Modal para Insertar-->
    <button type="submit" data-toggle="modal" data-target="#insertar_modal">Insertar clientes</button>
    <button type="submit">Vaciar Base de datos</button>

    <?php require_once("includes/" . "inc_footer.php") ?>