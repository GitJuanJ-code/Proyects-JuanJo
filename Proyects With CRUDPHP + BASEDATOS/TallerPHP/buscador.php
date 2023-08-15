<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Buscar Datos</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Buscador Datos Alumnos</h1>
                <form action="" method="get">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Identidad Alumno..">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Nombre Alumno..">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Apellido Alumno..">
                    <input type="date" class="form-control mb-3" name="busquedas">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Departamento..">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Direccion Alumno..">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Municipio...">
                    <input type="submit" name="enviar" class="btn btn-primary" value="Buscar">
                    <a href="index.html" class="btn btn-primary">Regresar</a>
                    <a href="alumno.php" class="btn btn-primary">Registrar</a>	
                </form>
            </div>
            
            <div class="col-md-8">
                <center><h1>Lista Alumnos</h1></center>
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Identificacion</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Fecha Nacimiento</th>
                            <th>Departamento</th>
                            <th>Direccion</th>
                            <th>Municipio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $con = conectar();
                            if(isset($_GET['enviar'])){
                                $busqueda = $_GET['busquedas'];
                                $consulta = $con->query("SELECT * FROM alumnos WHERE ident_alumno LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM alumnos WHERE nombres_alumn LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM alumnos WHERE apellidos_alumn LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM alumnos WHERE fecha_nacimiento_alumn LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM alumnos WHERE departamento_alumn LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM alumnos WHERE direccion_alumn LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM alumnos WHERE municipio_alumn LIKE '%$busqueda%'");
                                while($row = $consulta->fetch_array()) {
                                    ?>
                                    <tr>
                                        <th><?php echo $row['ident_alumno']?></th>
                                        <th><?php echo $row['nombres_alumn']?></th>
                                        <th><?php echo $row['apellidos_alumn']?></th>
                                        <th><?php echo $row['fecha_nacimiento_alumn']?></th>
                                        <th><?php echo $row['departamento_alumn']?></th>
                                        <th><?php echo $row['direccion_alumn']?></th>
                                        <th><?php echo $row['municipio_alumn']?></th>
                                        <th><a href="delete.php?id=<?php echo $row['id_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>
                                    </tr>
                                    <?php
                                }     
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>