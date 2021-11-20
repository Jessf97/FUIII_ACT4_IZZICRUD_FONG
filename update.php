<?php

include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$fecha_ingreso=$_POST['fecha_ingreso'];
$direccion=$_POST['direccion'];

$sql="UPDATE empleado SET  nombre='$nombre',apellidos='$apellidos',fecha_ingreso='$fecha_ingreso',direccion='$direccion' WHERE id_empleado='$id_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>