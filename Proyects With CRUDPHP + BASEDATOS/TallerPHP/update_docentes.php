<?php

include("conexion.php");
$con=conectar();

#docente
$id_docente=$_POST['id_docente'];
$ident_docente=$_POST['ident_docente'];
$nombres_doc=$_POST['nombres_doc'];
$apellidos_doc=$_POST['apellidos_doc'];
$fecha_nacimiento_doc=$_POST['fecha_nacimiento_doc'];
$profesion_doc=$_POST['profesion_doc'];
$telefono_doc=$_POST['telefono_doc'];
$direccion_doc=$_POST['direccion_doc'];


$sql="UPDATE docentes SET  ident_docente='$ident_docente',nombres_doc='$nombres_doc',apellidos_doc='$apellidos_doc',fecha_nacimiento_doc='$fecha_nacimiento_doc,profesion_doc='$profesion_doc,telefono_doc='$telefono_doc,direccion_doc='$direccion_doc WHERE id_docente='$id_docente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: docente.php");
    }
?>