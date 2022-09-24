<?php require_once '../Conexion.php';
require_once '../metodosCrud.php';
$nombre_producto=$_POST['txtnombre_producto'];
$modelo=$_POST['txtmodelo'];
$marca=$_POST['txtmarca'];
$color=$_POST['txtcolor'];
$capacidad=$_POST['txtcapacidad'];
$descripcion=$_POST['txtdescripcion'];
$fecha_agregado=$_POST['txtfecha_agregado'];
$datos=array(
            $nombre_producto,
            $modelo,
            $marca,
            $color,
            $capacidad,
            $descripcion,
            $fecha_agregado);
$obj = new Metodos();
if ($obj->insertarDatos($datos)==1) {
    header("location:../index.php");
}else{
    echo 'fallo al agregar';
}
?>