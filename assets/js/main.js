$(document).ready(function () {

    // Insertar clientes
    $('.insert').on('click', function () {
        var insert_prueba = $('#insert_prueba').serialize()
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: insert_prueba,
            sucess: function (r) {
                console.log(r)
                if (r == 1) {
                    alert("hola");

                } else {
                    alert("error");
                }
            }
        });

    });

    // Actualizar clientes
    $('.update').on('click', function () {

        //consigue los elementos de la tabla de la vista
        $tr = $(this).closest('tr');
        //mapea los datos y los guarda en la viariable datos
        var datos = $tr.children("td").map(function () {
            return $(this).text();
        });

        // console.log(datos)

        $('#update_id').val(datos[0]);
        $('#nombre').val(datos[1]);
        $('#apellidos').val(datos[2]);
        $('#telefono').val(datos[3]);
        $('#correo').val(datos[4]);
        $('#direccion').val(datos[5]);
        $('#dni').val(datos[6]);
        $('#poblacion').val(datos[7]);
        $('#edad').val(datos[8]);




    });



    $('.update_client').on('click', function () {
        var actualizar_client = $('#datos_client').serialize();
        console.log(actualizar_client);
        
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: actualizar_client,
            sucess: function (r) {
                console.log(r)
                if (r == 1) {
                    alert("hola");

                } else {
                    alert("error");
                }
            }
        });
    });

});


