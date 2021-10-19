<?php


if (file_exists('cors/cors.php'))
{
    include_once 'cors/cors.php';
}else{
    include_once '../cors/cors.php';
}

if (file_exists('session/session.php'))
{
    include_once 'session/session.php';
}else{
    include_once '../session/session.php';
}



$json = json_decode(file_get_contents('php://input'),true);

switch ($_SERVER['REQUEST_METHOD'])
{
    case 'POST':
        createSeassion($json['user'],$json['nombres'],$json['id_rol'],$json['detalle']);
        $result = array('status'=>200);
        echo json_encode($result);
        break;
}


?>