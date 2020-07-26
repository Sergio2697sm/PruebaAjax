<!-- modal-->
<div id="exampleModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Actualizar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="datos_client" action="<?php echo $_SERVER["PHP_SELF"]  ?>" method="POST">
                    <input type="hidden" name="id" id="update_id">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos">
                    </div>

                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su telefono">
                    </div>

                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control text-muted" id="correo" name="correo" placeholder="Ingrese su correo">
                    </div>

                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion">
                    </div>

                    <div class="form-group">
                        <label>DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese su dni">
                    </div>

                    <div class="form-group">
                        <label>Población</label>
                        <input type="text" class="form-control" id="poblacion" name="poblacion" placeholder="Ingrese su poblacion">
                    </div>

                    <div class="form-group">
                        <label>Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad">
                    </div>
                    <div class="text-center">
                        <input type="hidden" name="action" value="update">
                        <input type="submit" class="btn btn-primary update_client" name="update" value="Actualizar">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>