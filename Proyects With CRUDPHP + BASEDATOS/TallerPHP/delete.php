<?php

include("conexion.php");
$con=conectar();

$id_estudiante=$_GET['id'];

$sql="DELETE FROM alumnos  WHERE id_estudiante='$id_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>