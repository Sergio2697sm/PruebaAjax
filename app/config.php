<?php
// //inicializacion de sesion de usuario
 session_start();

/* URL constante */

define("PORT", "7879");
define("BASEPATH", "/PruebaAjax/");
define("URL", "http://127.0.0.1:" . PORT . BASEPATH);

/* Constantes para los paths de archivos */
//separa directorios
define("DS", DIRECTORY_SEPARATOR);
//te dice toda la ruta completa del directorio
define("ROOT", getcwd() . DS);

//para cada carpeta con su ruta
define("APP", ROOT . "app" . DS);
define("INCLUDES", ROOT . "includes" . DS);
define("VIEWS", ROOT . "views" . DS);

define("ASSETS", URL . "assets/");
define("CSS", ASSETS . "css/");

define("JS", ASSETS . "js/");

/* Constantes para BASE DE DATOS */
define("USER","root");
define("PASSWORD","");
define("SERVER","localhost");
define("NAME_BD","prueba");

/* Incluir todas nuestras funciones*/

require_once(APP.'funcion.php');