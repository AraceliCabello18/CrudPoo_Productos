<?php require_once "Conexion.php";
require_once "metodosCrud.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Crud de Dispositivos</title>
</head>
<body>
    <form action="procesos/insertar.php" method="post">
        <label for="">Nombre</label>
        <p></p>
        <input type="text" name="txtnombre_producto">
        <p></p>
        <label for="">Modelo</label>
        <p></p>
        <input type="text" name="txtmodelo">
        <p></p>
        <label for="">Marca</label>
        <p></p>
        <input type="text" name="txtmarca">
        <p></p>
        <label for="">Color</label>
        <p></p>
        <input type="text" name="txtcolor">
        <p></p>
        <label for="">Capacidad</label>
        <p></p>
        <input type="text" name="txtcapacidad">
        <p></p>
        <label for="">Descripcion</label>
        <p></p>
        <input type="text" name="txtdescripcion">
        <p></p>
        <label for="">Fecha</label>
        <p></p>
        <input type="text" name="txtfecha_agregado">
        <p></p>
        <button>Agregar</button>
    </form>
    <br>
    <br>
    <table style="border-collapse: collapse;" border="1">
        <tr>
            <td>Nombre</td>
            <td>Modelo</td>
            <td>Marca</td>
            <td>Color</td>
            <td>Capacidad</td>
            <td>Descripcion</td>
            <td>Fecha</td>
            <td>Actualizar</td>
            <td>Elininar</td>
        </tr>
        <?php
        $obj= new Metodos();
        $sql="SELECT id,nombre_producto,modelo,marca,color,capacidad,descripcion,fecha_agregado
                from producto";
        $datos=$obj-> mostrarDatos($sql);
        foreach($datos as $key){
        ?>
        <tr>
            <td><?php echo $key['nombre_producto']; ?></td>
            <td><?php echo $key['modelo']; ?></td>
            <td><?php echo $key['marca']; ?></td>
            <td><?php echo $key['color']; ?></td>
            <td><?php echo $key['capacidad']; ?></td>
            <td><?php echo $key['descripcion']; ?></td>
            <td><?php echo $key['fecha_agregado']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $key['id']?>">
                Editar
                </a>
            </td>
            <td>
                <a href="procesos/eliminar.php?id=<?php echo $key['id']?>">
                Eliminar
                </a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table> 
</body>
</html>