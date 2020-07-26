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