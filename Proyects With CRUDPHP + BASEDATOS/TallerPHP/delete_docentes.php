<?php

include("conexion.php");
$con=conectar();

$id_docente=$_GET['id'];

$sql="DELETE FROM docentes  WHERE id_docente='$id_docente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: docente.php");
    }
?>