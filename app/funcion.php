<?php
include("BBDD.php");
function select_client()
{
    $conexion = conexionBBDD();

    $select = "SELECT * FROM usuarios";
    $resultado = $conexion->query($select);
    while ($row = $resultado->fetch_array()) {

        $array[] = $row;
    }
    return $array;
}

function get_client_id()
{

    $conexion = conexionBBDD();

    $id = $_POST["id"];

    $select = "SELECT * FROM usuarios WHERE id=$id";
    $resultado = $conexion->query($select);
    while ($row = $resultado->fetch_array()) {

        $array[] = $row;
    }
    return $array;
}

//insertar clientes
function insert_client()
{

    $conexion = conexionBBDD();

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $dni = $_POST['dni'];
    $poblacion = $_POST['poblacion'];
    $edad = $_POST['edad'];


    $insert = "INSERT into usuarios (Nombre,Apellidos, Telefono, Correo, Dirección, DNI, Población, Edad)
        VALUES ('$nombre','$apellidos',$telefono,'$correo','$direccion','$dni','$poblacion',$edad) ";
    // echo $insert;
    $resultado = $conexion->query($insert);


    echo ($resultado) ? 1 : 0;
}

//actualizar cliente
function update_client()
{
    $conexion = conexionBBDD();

    $id = $_POST["id"];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $dni = $_POST['dni'];
    $poblacion = $_POST['poblacion'];
    $edad = $_POST['edad'];

    $update = "UPDATE usuarios 
    SET Nombre= '$nombre',Apellidos='$apellidos',Telefono=$telefono,Correo='$correo',Dirección='$direccion',
    DNI='$dni',Población='$poblacion',Edad=$edad WHERE id = $id";
    $resultado = $conexion->query($update);

    if ($resultado) {
        echo "<script>alert('Cambiado con exito')</script>";
    } else {
        echo "<script>alert('Error')</script>";
    }
}

function delete_client() {
    $conexion = conexionBBDD();
    $delete= "DELETE FROM usuarios WHERE id = $_POST[id]";
    $resultado = $conexion->query($delete);
    echo $delete;

    if ($resultado) {
        echo "<script>alert('Borrado con exito')</script>";
    } else {
        echo "<script>alert('Error')</script>";
    }

}

// function mostrar_campo($campo)
// {
//     if (isset($_POST[$campo]))
//         echo 'value="' . $_POST[$campo] . '"';
// }
