<?php
include("conexion.php");
$con=conectar();

$sql="SELECT*FROM alumnos";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Formuario</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_estudiante" placeholder="codigo estudiante">
                                    <input type="text" class="form-control mb-3" name="ident_alumno" placeholder="Identificacion">
                                    <input type="text" class="form-control mb-3" name="nombres_alumn" placeholder="Nombre Completo">
                                    <input type="text" class="form-control mb-3" name="apellidos_alumn" placeholder="Apellido Completo">
                                    <input type="date" class="form-control mb-3" name="fecha_nacimiento_alumn" placeholder="Fecha Nacimiento">
                                    <input type="text" class="form-control mb-3" name="departamento_alumn" placeholder="Departamento">
                                    <input type="text" class="form-control mb-3" name="direccion_alumn" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="municipio_alumn" placeholder="Municipio-Ciudad">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="index.html" class="btn btn-primary">Regresar</a>
                                    <a href="buscador.php" class="btn btn-primary">Buscador</a>	
                                </form>
                        </div>

                        <div class="col-md-8">
                        <center><h1>Registro Base Datos Alumnos</h1></center>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th></th>
                                        <th>Codigo</th>
                                        <th>Identificacion</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Departamento</th>
                                        <th>Municipio</th>
                                        <th>Direccion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_estudiante']?></th>
                                                <th><?php  echo $row['ident_alumno']?></th>
                                                <th><?php  echo $row['nombres_alumn']?></th>
                                                <th><?php  echo $row['apellidos_alumn']?></th>
                                                <th><?php  echo $row['fecha_nacimiento_alumn']?></th>
                                                <th><?php  echo $row['departamento_alumn']?></th>
                                                <th><?php  echo $row['direccion_alumn']?></th>
                                                <th><?php  echo $row['municipio_alumn']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id_estudiante'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>