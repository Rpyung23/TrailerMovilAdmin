<?php


function createSeassion($user,$names,$id_rol,$rol)
{
    session_start();
    $_SESSION["user"] = $user;
    $_SESSION["nombres"] = $names;
    $_SESSION["id_rol"] = $id_rol;
    $_SESSION["detalle"] = $rol;
}

function deleteSession()
{
    session_unset();
}



?>
