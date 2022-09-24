<?php require_once "Conexion.php";
$obj=new conectar();
$conexion=$obj->conexion();
$id=$_GET['id'];
$sql="SELECT nombre_producto, modelo, marca, color, capacidad, descripcion, fecha_agregado
            from producto where id='$id'";
$result=mysqli_query($conexion,$sql); 
$ver=mysqli_fetch_row($result); ?>
<!DOCTYPE html>
<head>
    <title>Editar</title>
</head>
<body>
<form action="procesos/actualizar.php" method="post">
    <input type="text" hidden="" value="<?php echo $id ?>" name="id">
        <label for="">Nombre</label>
        <p></p>
        <input type="text" name="txtnombre_producto" value="<?php echo $ver[0] ?>">
        <p></p>
        <label for="">Modelo</label>
        <p></p>
        <input type="text" name="txtmodelo" value="<?php echo $ver[1] ?>">
        <p></p>
        <label for="">Marca</label>
        <p></p>
        <input type="text" name="txtmarca" value="<?php echo $ver[2] ?>">
        <p></p>
        <label for="">Color</label>
        <p></p>
        <input type="text" name="txtcolor" value="<?php echo $ver[3] ?>">
        <p></p>
        <label for="">Capacidad</label>
        <p></p>
        <input type="text" name="txtcapacidad" value="<?php echo $ver[4] ?>">
        <p></p>
        <label for="">Descripcion</label>
        <p></p>
        <input type="text" name="txtdescripcion" value="<?php echo $ver[5] ?>">
        <p></p>
        <label for="">Fecha</label>
        <p></p>
        <input type="text" name="txtfecha_agregado" value="<?php echo $ver[6] ?>">
        <p></p>
        <button>Agregar</button>
</form>
</body>
</html>