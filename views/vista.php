<?php require_once("includes/" . "inc_header.php");
require_once("app/funcion.php");
?>


<!--Contenido-->
<div class="container-fluid">
    <h1 class="text-center">Tabla Clientes</h1>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Direccion</th>
                <th scope="col">DNI</th>
                <th scope="col">Poblacion</th>
                <th scope="col">Edad</th>
                <th scope="col">Opciones</th>


                <!-- <th scope="col">Ver mas informacion</th> -->

            </tr>
        </thead>
        <tbody>
            <?php
            foreach (select_client() as $f) {
            ?>
                <tr class="text-center">
                    <td><?php echo $f["Nombre"]; ?> </td>
                    <td><?php echo $f["Apellidos"]; ?> </td>
                    <td><?php echo $f["Telefono"]; ?> </td>
                    <td><?php echo $f["Correo"]; ?> </td>

                    <td><?php echo  $f["Dirección"] ?></td>
                    <td><?php echo $f["DNI"] ?></td>
                    <td><?php echo $f["Población"] ?></td>
                    <td><?php echo $f["Edad"] ?></td>

                    <td>
                        <form action="" method="POST">
                            <input type='hidden' value="<?php echo $f['id'] ?>" name="id">
                            <button class="update" data-toggle="modal" data-target="#exampleModalLong" type="submit"><i class="fas fa-pen-square"></i></button>
                            <button class="click-des" type="submit"><i class="fas fa-times-circle"></i></button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <table>
        <form id="insert_prueba" action="<?php echo $_SERVER["PHP_SELF"]  ?>" method="POST">
            <h1 class="text-center">Insertar clientes</h1>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
                <label>Apellidos</label>
                <input type="text" class="form-control" name="apellidos" placeholder="Ingrese sus apellidos">
            </div>

            <div class="form-group">
                <label>Teléfono</label>
                <input type="number" class="form-control" name="telefono" placeholder="Ingrese su telefono">
            </div>

            <div class="form-group">
                <label>Correo</label>
                <input type="email" class="form-control text-muted" name="correo" placeholder="Ingrese su correo">
            </div>

            <div class="form-group">
                <label>Dirección</label>
                <input type="text" class="form-control" name="direccion" placeholder="Ingrese su direccion">
            </div>

            <div class="form-group">
                <label>DNI</label>
                <input type="text" class="form-control" name="dni" placeholder="Ingrese su dni">
            </div>

            <div class="form-group">
                <label>Población</label>
                <input type="text" class="form-control" name="poblacion" placeholder="Ingrese su poblacion">
            </div>

            <div class="form-group">
                <label>Edad</label>
                <input type="number" class="form-control" name="edad" placeholder="Ingrese su edad">
            </div>

            <input type="hidden" name="action" value="post">
            <input type="submit" name="insertar" class="btn btn-primary mb-3 insert" value="Insertar clientes">
        </form>
    </table>
    <button type="submit">Vaciar Base de datos</button>

    <!-- modal-->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Actualizar cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="update_client" action="<?php echo $_SERVER["PHP_SELF"]  ?>" method="POST">
                        <!-- <?php
                                foreach (get_client_id() as $f) {
                                ?> -->
                        <input type='hidden' value="<?php echo $f["id"] ?>" name="id">

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $f["Nombre"]?>" placeholder="Ingrese su nombre">
                        </div>
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" value="<?php echo $f["Apellidos"]?>" placeholder="Ingrese sus apellidos">
                        </div>

                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="number" class="form-control" name="telefono" value="<?php echo $f["Telefono"]?>" placeholder="Ingrese su telefono">
                        </div>

                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" class="form-control text-muted" name="correo" value="<?php echo $f["Correo"]?>" placeholder="Ingrese su correo">
                        </div>

                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" class="form-control" name="direccion" value="<?php echo $f["Dirección"]?>" placeholder="Ingrese su direccion">
                        </div>

                        <div class="form-group">
                            <label>DNI</label>
                            <input type="text" class="form-control" name="dni"  value="<?php echo $f["DNI"]?>" placeholder="Ingrese su dni">
                        </div>

                        <div class="form-group">
                            <label>Población</label>
                            <input type="text" class="form-control" name="poblacion"  value="<?php echo $f["Población"]?>" placeholder="Ingrese su poblacion">
                        </div>

                        <div class="form-group">
                            <label>Edad</label>
                            <input type="number" class="form-control" name="edad"  value="<?php echo $f["Edad"]?>" placeholder="Ingrese su edad">
                        </div>
                        <div class="form-group text-center">
                            <!-- <input type="hidden" name="action" value="update"> -->
                            <input type="button" class="btn btn-primary" data-dismiss="modal" name="update" value="Actualizar">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                        </div>
                        <!-- <div class="modal-footer">
                           
                        <!-- </div> -->
                    </form>
                    <!-- <?php
                                }
                            ?> -->

                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["update"])) {
        update_client();
    }
    ?>
    <?php require_once("includes/" . "inc_footer.php") ?>