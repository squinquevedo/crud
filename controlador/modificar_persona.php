<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("select * from tb_persona where id=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">Modificar registros</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php 
                include "controlador/actualizar_persona.php";
                while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">documento</label>
                <input type="text" class="form-control" name="documento" value="<?= $datos->documento ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha_nc ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo</label>
                <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
            </div>
            <?php }
            ?>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar usuario</button>
        </form>
</body>
</html>
