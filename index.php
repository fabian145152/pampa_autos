<?php
include_once "funciones/funciones.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTA DE UNIDADES</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootbox.min.js"></script>

</head>

<body>
    <h1>Listado de autos</h1>

    <form action="login.php" method="post">
        <br><br><br><br><br>
        <div class="form-row align-items-center">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            <div class="col-auto">
                <label class="sr-only" for="inlineFormInput">Elija</label>
                <select name="opcion" id="opcion" class="form-control mb-2" ?utf8mb4?>

                    <option value="solo_lee">Solo lectura</option>
                    <option value="edita">Editar</option>
                </select>
            </div>
            &nbsp;&nbsp;

            &nbsp;&nbsp;
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>