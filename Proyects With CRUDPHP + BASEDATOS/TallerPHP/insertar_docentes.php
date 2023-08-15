<?php
include("conexion.php");
$con=conectar();

#docentes
$id_docente=$_POST['id_docente'];
$ident_docente=$_POST['ident_docente'];
$nombres_doc=$_POST['nombres_doc'];
$apellidos_doc=$_POST['apellidos_doc'];
$fecha_nacimiento_doc=$_POST['fecha_nacimiento_doc'];
$profesion_doc=$_POST['profesion_doc'];
$telefono_doc=$_POST['telefono_doc'];
$direccion_doc=$_POST['direccion_doc'];


$sql="INSERT INTO docentes VALUES('$id_docente','$ident_docente','$nombres_doc','$apellidos_doc','$fecha_nacimiento_doc','$profesion_doc','$telefono_doc','$direccion_doc')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location: docente.php");
}
?>