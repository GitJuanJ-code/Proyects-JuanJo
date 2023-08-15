<?php 
    include("conexion.php");
    $con=conectar();

$id_estudiante=$_GET['id_estudiante'];

$sql="SELECT * FROM alumnos WHERE id_estudiante='$id_estudiante'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_estudiante" value="<?php echo $row['id_estudiante']  ?>">
                                <input type="text" class="form-control mb-3" name="ident_alumno" placeholder="Identificacion" value="<?php echo $row['ident_alumno']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres_alumn" placeholder="Nombre Completo"value="<?php echo $row['nombres_alumn']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos_alumn" placeholder="Apellido Completo"value="<?php echo $row['apellidos_alumn']  ?>">
                                <input type="date" class="form-control mb-3" name="fecha_nacimiento_alumn" placeholder="Fecha Nacimiento"value="<?php echo $row['fecha_nacimiento_alumn']  ?>">
                                <input type="text" class="form-control mb-3" name="departamento_alumn" placeholder="Departamento"value="<?php echo $row['departamento_alumn']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion_alumn" placeholder="Direccion"value="<?php echo $row['direccion_alumn']  ?>">
                                <input type="text" class="form-control mb-3" name="municipio_alumn" placeholder="Municipio-Ciudad"value="<?php echo $row['municipio_alumn']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            <a href="index.html" class="btn btn-primary">Regresar</a>
                            <a href="alumno.php" class="btn btn-primary">Ir Registro Alumno</a>
                    </form>
                    
                </div>
    </body>
</html>

