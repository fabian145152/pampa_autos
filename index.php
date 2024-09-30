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
    <form action="login.php" method="post">
        <br><br><br><br><br>
        <div class="form-row align-items-center">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            <div class="col-auto">
                <label class="sr-only" for="inlineFormInput">Elija</label>
                <select name="opcion" id="opcion" class="form-control mb-2" ?utf8mb4?>
                    <option value="">SELECCIONE</option>
                    <option value="opcion1">Administrador</option>
                    <option value="opcion2">Usuario editor</option>
                    <option value="opcion3">Solo lectura</option>
                </select>
            </div>
            &nbsp;&nbsp;
            <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">

                    </div>
                    <input type="password" class="form-control" name="password" id="password" placeholder="pasword" required>
                </div>
            </div>
            &nbsp;&nbsp;
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>