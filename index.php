<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Crud php y MySQL</title>
    <script src="https://kit.fontawesome.com/9ed00b0cc1.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">hola</h1>
    <div class="container-fluid row">
        <form class="col-4" p-3 method="POST">
            <h3 class="text-center text-secondary">Modulo de Registro de personas</h3>
            <?php 
            include "modelo/conexion.php";
            include "controlador/registro_persona.php";
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
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">nombre</th>
                        <th scope="col">apellido</th>
                        <th scope="col">documento</th>
                        <th scope="col">fecha de nacimiento</th>
                        <th scope="col">correo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from tb_persona");
                    while($datos=$sql->fetch_object()){?>
                    <tr>
                        <td><?= $datos->id ?></td>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->apellido ?></td>
                        <td><?= $datos->documento ?></td>
                        <td><?= $datos->fecha_nc ?></td>
                        <td><?= $datos->correo ?></td>
                        <td>
                            <a href="controlador/modificar_persona.php" class="btn btn-small btn-warning"><i class="fa-solid fa-pen"></i></a>
                            <a href="" class="btn btn-small-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>