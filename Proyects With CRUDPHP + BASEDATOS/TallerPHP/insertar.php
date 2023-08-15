<?php
include("conexion.php");
$con=conectar();

#alumnos
$id_estudiante=$_POST['id_estudiante'];
$ident_alumn=$_POST['ident_alumno'];
$nombres_alumn=$_POST['nombres_alumn'];
$apellidos_alumn=$_POST['apellidos_alumn'];
$fecha_nacimiento_alumn=$_POST['fecha_nacimiento_alumn'];
$departamento_alumn=$_POST['departamento_alumn'];
$direccion_alumn=$_POST['direccion_alumn'];
$municipio_alumn=$_POST['municipio_alumn'];


$sql="INSERT INTO alumnos VALUES('$id_estudiante','$ident_alumno','$nombres_alumn','$apellidos_alumn','$fecha_nacimiento_alumn','$departamento_alumn','$direccion_alumn','$municipio_alumn')";
$query= mysqli_query($con,$sql);



if($query){
    Header("Location: alumno.php");
}else{
}
?>