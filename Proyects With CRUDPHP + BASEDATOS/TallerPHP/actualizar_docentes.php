<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM docentes WHERE id_docente='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update_docentes.php" method="POST">
                    
                                <input type="hidden" name="id_docente" value="<?php echo $row['id_docente']  ?>">
                                <input type="text" class="form-control mb-3" name="ident_docente" placeholder="Identificacion" value="<?php echo $row['ident_docente']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres_doc" placeholder="Nombres Completo" value="<?php echo $row['nombres_doc']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos_doc" placeholder="Apellidos Completo"value="<?php echo $row['apellidos_doc']  ?>">
                                <input type="date" class="form-control mb-3" name="fecha_nacimiento_doc" placeholder="Fecha Nacimiento"value="<?php echo $row['fecha_nacimiento_doc']  ?>">
                                <input type="text" class="form-control mb-3" name="profesion_doc" placeholder="Profesion"value="<?php echo $row['profesion_doc']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono_doc" placeholder="Numero Telefonico"value="<?php echo $row['telefono_doc']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion_doc" placeholder="Direccion"value="<?php echo $row['direccion_doc']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            <a href="index.html" class="btn btn-primary">Regresar</a>
                            <a href="docente.php" class="btn btn-primary">Ir Registro Docentes</a>
                    </form>
                    
                </div>
    </body>
</html>

