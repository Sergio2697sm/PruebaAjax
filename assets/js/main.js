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
        // $('#myModal').modal('show');
        //     var actualizar_client = $('#update_client').serialize();
        //     $.ajax({
        //         type: 'POST',
        //         url: 'ajax.php',
        //         data: actualizar_client,
        //         sucess: function (r) {
        //             console.log(r)
        //             if (r == 1) {
        //                 alert("hola");

        //             } else {
        //                 alert("error");
        //             }
        //         }
        //     });
        // });

    })
})
