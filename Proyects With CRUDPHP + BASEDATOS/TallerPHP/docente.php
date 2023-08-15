<?php
include("conexion.php");
$con=conectar();

$sql="SELECT*FROM docentes";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA DOCENTES</title>
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
                                <form action="insertar_docentes.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="id_docente" placeholder="Codigo docente">
                                    <input type="text" class="form-control mb-3" name="ident_docente" placeholder="Identificacion">
                                    <input type="text" class="form-control mb-3" name="nombres_doc" placeholder="Nombres Completo">
                                    <input type="text" class="form-control mb-3" name="apellidos_doc" placeholder="Apellidos Completo">
                                    <input type="date" class="form-control mb-3" name="fecha_nacimiento_doc" placeholder="Fecha Nacimiento">
                                    <input type="text" class="form-control mb-3" name="profesion_doc" placeholder="Profesion">
                                    <input type="text" class="form-control mb-3" name="telefono_doc" placeholder="Numero Telefonico">
                                    <input type="text" class="form-control mb-3" name="direccion_doc" placeholder="Direccion">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="index.html" class="btn btn-primary">Regresar</a>
                                    <a href="buscador_docentes.php" class="btn btn-primary">Buscador</a>		
                                </form>
                        </div>

                        <div class="col-md-8">
                        <center><h1>Registro Base Datos Docentes</h1></center>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Identificacion</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Profesion</th>
                                        <th>Telefono</th>
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
                                                <th><?php  echo $row['id_docente']?></th>
                                                <th><?php  echo $row['ident_docente']?></th>
                                                <th><?php  echo $row['nombres_doc']?></th>
                                                <th><?php  echo $row['apellidos_doc']?></th>
                                                <th><?php  echo $row['fecha_nacimiento_doc']?></th>
                                                <th><?php  echo $row['profesion_doc']?></th>
                                                <th><?php  echo $row['telefono_doc']?></th>
                                                <th><?php  echo $row['direccion_doc']?></th>   
                                                <th><a href="actualizar_docentes.php?id=<?php echo $row['id_docente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete_docentes.php?id=<?php echo $row['id_docente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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