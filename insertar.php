<?php
include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$fecha_ingreso=$_POST['fecha_ingreso'];
$direccion=$_POST['direccion'];

$sql="INSERT INTO empleado VALUES('$id_empleado','$nombre','$apellidos','$fecha_ingreso','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>