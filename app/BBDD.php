<?php
require_once("config.php");
function conexionBBDD() {
$conexion= mysqli_connect(SERVER,USER,PASSWORD,NAME_BD);
$error=$conexion->connect_errno;

    if($error !=null) {
        echo "<p>Error $error conectando a la base de datos: $conexion->connect_errno</p>";
        exit();
    }else {
        mysqli_set_charset($conexion,"utf8");
        return $conexion;
    }

}
