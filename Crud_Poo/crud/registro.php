<?php

include_once('crud_conn.php');

if(empty($_POST["btnreg"])){
if(!empty($_POST["documento"]) and !empty($_POST["nombre"]) and !empty($_POST["apellidos"]) and !empty($_POST["fecha"]) and !empty($_POST["ciudad"]) ){

    $documento= $_POST["documento"];
    $nombre= $_POST["nombre"];
    $apellidos= $_POST["apellidos"];
    $fecha= $_POST["fecha"];
    $ciudad= $_POST["ciudad"];

    $sql = $conexion->query(" insert into clientes(cc_clientes, nombre_clientes, apellidos_clientes, f_lugar, f_fecha) values('$documento', '$nombre', '$apellidos', '$ciudad', '$fecha')");
if ($sql==1){
echo 'Agregado Correctamente';
}else{
    echo 'Incorrecto';
}

}
}

?>