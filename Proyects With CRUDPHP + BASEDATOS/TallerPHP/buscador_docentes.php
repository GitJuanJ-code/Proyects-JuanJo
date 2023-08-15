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
                <h1>Buscador Datos Docentes</h1>
                <form action="" method="get">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Identidad Docente..">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Nombre Docente..">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Apellido Docente..">
                    <input type="date" class="form-control mb-3" name="busquedas">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Profesion Docente..">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Telefono Docente..">
                    <input type="text" class="form-control mb-3" name="busquedas" placeholder="Direccion Docente..">
                    <input type="submit" name="enviar" class="btn btn-primary" value="Buscar">
                    <a href="index.html" class="btn btn-primary">Regresar</a>
                    <a href="docente.php" class="btn btn-primary">Registrar</a>
                </form>
            </div>
            
            <div class="col-md-8">
                <center><h1>Lista Docentes</h1></center>
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Identificacion</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Fecha Nacimiento</th>
                            <th>Profesion</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $con = conectar();
                            if(isset($_GET['enviar'])){
                                $busqueda = $_GET['busquedas'];
                                $consulta = $con->query("SELECT * FROM docentes WHERE ident_docente LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM docentes WHERE nombres_doc LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM docentes WHERE apellidos_doc LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM docentes WHERE fecha_nacimiento_doc LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM docentes WHERE profesion_doc LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM docentes WHERE telefono_doc LIKE '%$busqueda%'");
                                $consulta = $con->query("SELECT * FROM docentes WHERE direccion_doc LIKE '%$busqueda%'");
                                while($row = $consulta->fetch_array()) {
                                    ?>
                                    <tr>
                                        <th><?php echo $row['ident_docente']?></th>
                                        <th><?php echo $row['nombres_doc']?></th>
                                        <th><?php echo $row['apellidos_doc']?></th>
                                        <th><?php echo $row['fecha_nacimiento_doc']?></th>
                                        <th><?php echo $row['profesion_doc']?></th>
                                        <th><?php echo $row['telefono_doc']?></th>
                                        <th><?php echo $row['direccion_doc']?></th>
                                        <th><a href="delete_docentes.php?id=<?php echo $row['id_docente'] ?>" class="btn btn-danger">Eliminar</a></th>
                                    </tr>
                                    <?php
                                }     
                            }
                        ?>
                    </tbody>
                </table>