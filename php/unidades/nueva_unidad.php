<?php
include_once "../../funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVA UNIDAD</title>
    <style>
        .container {
            background-color: cadetblue;
        }


        .checkbox-container {
            display: flex;
            gap: 10px;
            /* espacio entre los checkbox */
        }
    </style>
    <?php head() ?>
</head>

<body>
    <br><br><br>
    <div class="container">

        <div class="col-md-4">
            <br><br>
            <h3 class="text-center">CREAR NUEVA UNIDAD.</h3>
        </div>
        <form class="form-group" accept=-"charset utf8" action="save_unidad.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <!-- Columna 1  -->
                <div class="col-4">

                    <div class="form-group">
                        <label class="control-label"><strong>MODELO</strong></label>
                        <input type="text" class="form-control" placeholder="MODELO" name="modelo" id="modelo" autofocus size="30">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><strong>DOMINIO</strong></label>
                        <input type="text" class="form-control" placeholder="DOMINIO" name="dominio" id="dominio" autofocus required>
                    </div>
                </div>
                <!-- Columna 2  -->


                <div class="col-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="control-label"><strong>TITULO</strong></label>
                            <input type="file" class="form-control" name="titulo_f" id="titulo_f" accept="application/pdf application/jpg">
                            <input type="file" class="form-control" name="titulo_d" id="titulo_d" accept="application/pdf application/jpg">
                        </div>

                        <div class="form-group">
                            <label class="control-label"><strong>CEDULA VERDE</strong></label>
                            <input type="file" class="form-control" name="cedula_f" id="cedula_f" accept="application/pdf application/jpg">
                            <input type="file" class="form-control" name="cedula_d" id="cedula_d" accept="application/pdf application/jpg">
                        </div>


                    </div>
                    <div calss="form-group">
                        <input type="text" id="hab_d" name="hab_d" accept="application/pdf" class="form-control" size="50%" placeholder="SUBIR PDF , JPG o JPEG" readonly>
                    </div>
                </div>
                <!-- Columna 3  -->
                <div class="col-4">
                    <div calss="form-group">
                        <label class="control-label"><strong>VENCIMIENTO GNC</strong></label>
                        <input type="date" id="fecha_gas" name="fecha_gas" class="form-control" size="30">
                    </div>
                    <div calss="form-group">
                        <label class="control-label"><strong>VENCIMIENTO VTV</strong></label>
                        <input type="date" id="fecha_vtv" name="fecha_vtv" class="form-control" size="30">
                    </div>

                    <div calss="form-group">
                        <label class="control-label"><strong>VENCIMIENTO HAB</strong></label>
                        <input type="date" id="fecha_hab" name="fecha_h" class="form-control" size="30">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="lista_autos.php" class="btn btn-success">Salir</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" class="btn btn-success" value="añadir unidad">

            </div>
        </form>
        <br>
    </div>


    <?php foot() ?>
</body>

</html>