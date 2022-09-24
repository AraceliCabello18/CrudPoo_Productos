<?php
$id=$_GET['id'];

require_once '../Conexion.php';
require_once '../metodosCrud.php';

$obj = new Metodos();
if ($obj->eliminarDatos($id)==1) {
    header("location:../index.php");
}else{
    echo 'fallo al agregar';
}
?>