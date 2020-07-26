<div id="insertar_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Insertar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <table>
                    <form id="insert_prueba" action="<?php echo $_SERVER["PHP_SELF"]  ?>" method="POST">
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
            </div>

            </table>
        </div>
    </div>
</div>
</div>