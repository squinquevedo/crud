<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="col-4" p-3 method="POST">
            <h3 class="text-center text-secondary">Modificar registros</h3>
            <?php 
           
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">documento</label>
                <input type="text" class="form-control" name="documento">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo</label>
                <input type="text" class="form-control" name="correo">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">registrar</button>
        </form>
</body>
</html>
