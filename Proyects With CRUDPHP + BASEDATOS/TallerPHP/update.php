<?php

include("conexion.php");
$con=conectar();

#alumnos
$id_estudiante=$_POST['id_estudiante'];
$ident_alumno=$_POST['ident_alumno'];
$nombres_alumn=$_POST['nombres_alumn'];
$apellidos_alumn=$_POST['apellidos_alumn'];
$fecha_nacimiento_alumn=$_POST['fecha_nacimiento_alumn'];
$departamento_alumn=$_POST['departamento_alumn'];
$direccion_alumn=$_POST['direccion_alumn'];
$municipio_alumn=$_POST['municipio_alumn'];


$sql="UPDATE alumnos SET  ident_alumno='$ident_alumno',nombres_alumn='$nombres_alumn',apellidos_alumn='$apellidos_alumn',fecha_nacimiento_alumn='$fecha_nacimiento_alumn,departamento_alumn='$departamento_alumn,direccion_alumn='$direccion_alumn,municipio_alumn='$municipio_alumn WHERE id_estudiante='$id_estudiante'";
$query=mysqli_query($con,$sql);

if($query){
        header("Location: alumno.php");
    }
?>