<?php
class Metodos{
    public function mostrarDatos($sql){
        $c = new conectar();
        $conexion=$c->conexion();
        $result=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    public function insertarDatos($datos){
        $c= new conectar();
        $conexion=$c->conexion();
        $sql="INSERT into producto(nombre_producto,modelo,marca,color,capacidad,descripcion,fecha_agregado)
                        values('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]')";
        return $result=mysqli_query($conexion,$sql);                    
    }
    public function actualizarDatos($datos){
        $c = new conectar();
        $conexion=$c->conexion();

        $sql= "UPDATE producto set nombre_producto='$datos[0]',
                                    modelo='$datos[1]',
                                    marca='$datos[2]', 
                                    color='$datos[3]',
                                    capacidad='$datos[4]',
                                    descripcion='$datos[5]',
                                    fecha_agregado='$datos[6]'
                            where id='$datos[7]'";
        return $result=mysqli_query($conexion,$sql);
    }
    public function eliminarDatos($id){
        $c = new conectar();
        $conexion=$c->conexion();
        $sql="DELETE from producto where id='$id'";
        return $result=mysqli_query($conexion,$sql);
    }
}
?>