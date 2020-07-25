<?php
require_once("app/config.php");

//si no existe la session de action su estado es 403
if (!isset($_POST["action"])) {
    http_response_code(403);
    echo json_encode(['status' => 403]);
    die;
}

//inicializamos la sesion de action
$action = (isset($_POST['action'])) ? $_POST['action'] : '';

switch ($action) {
    case 'post':
        insert_client();
        break;

    // case 'update';
    //     update_client();
    //     break;
}
