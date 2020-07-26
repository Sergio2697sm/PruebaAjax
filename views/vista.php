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
                        <input type='hidden' value="<?php echo $f['id'] ?>" name="id">
                        <button type="submit" class="update" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-pen-square"></i></button>
                        <button class="click-des" type="submit"><i class="fas fa-times-circle"></i></button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <?php include("includes/update_modal.php");
    include("includes/insertar_clientes.php");
    ?>

    <button type="submit">Vaciar Base de datos</button>



    <!-- <?php
    //if (isset($_POST["update"])) {
        //update_client();
   // }
    ?> -->
    <?php require_once("includes/" . "inc_footer.php") ?>