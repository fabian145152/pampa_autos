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
        * {
            background-color: cadetblue;
        }
    </style>
    <?php head() ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-center">CREAR NUEVA UNIDAD.</h3>
            </div>
            <form class="form-group" accept=-"charset utf8" action="save_unidad.php" method="POST" enctype="multipart/form-data">

                <div class="container">

                    <div class="container">
                        <div class="row">
                            <!-- Columna 1  -->
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="NUMERO DE MOVIL" name="movil" id="movil" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">DOMINIO</label>
                                    <input type="text" class="form-control" placeholder="DOMINIO" name="dominio" id="dominio" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">AÑO</label>
                                    <input type="text" class="form-control" placeholder="AÑO" name="anio" id="anio" autofocus required>
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">auto_f_dominio.jpg</label>
                                    <input type="file" id="auto_f" name="auto_f" accept=".jpg,.jpeg" class="form-control" size="30">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">titulo_f_dominio.pdf</label>
                                    <input type="file" class="form-control" accept="application/pdf" name="titulo_f" id="titulo_f">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">licencia_f_dominio.pdf</label>
                                    <input type="file" id="licencia_f" name="licencia_f" accept="application/pdf" class="form-control" size="30">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">seguro_f_dominio.pdf</label>
                                    <input type="file" id="seguro_f" name="seguro_f" accept="application/pdf" class="form-control" size="30">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">cedula_f_dominio.pdf</label>
                                    <input type="file" id="cedula_v_f" name="cedula_v_f" accept="application/pdf" class="form-control" size="30">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">vtv_f_dominio.pdf</label>
                                    <input type="file" id="vtv_f" name="vtv_f" accept="application/pdf" class="form-control" size="30">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">gas_f_deminio.pdf</label>
                                    <input type="file" id="gas_f" name="gas_f" accept="application/pdf" class="form-control" size="30">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">hab_remis_f_dominio.pdf</label>
                                    <input type="file" id="hab_f" name="hab_f" accept="application/pdf" class="form-control" size="30">
                                </div>

                                <div calss="form-group">
                                    <label class="control-label">CHOFER</label>
                                    <input type="text" id="chofer" name="chofer" class="form-control" size="30">
                                </div>

                            </div>



                            <!-- Columna 2  -->
                            <div class="col-4">
                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="MARCA" name="marca" id="marca" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">patente_f_dominio</label>
                                    <input type="file" class="form-control" accept="application/pdf" name="patente_f" id="patente_f" autofocus>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">COLOR</label>
                                    <input type="text" class="form-control" placeholder="COLOR" name="color" id="color" autofocus>
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">auto_d_dominio.jpg</label>
                                    <input type="file" id="auto_d" name="auto_d" accept=".jpg,.jpeg" class="form-control" size="30">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">titulo_d_dominio.pdf</label>
                                    <input type="file" class="form-control" accept="application/pdf" name="titulo_d" id="titulo_d" autofocus>
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">licencia_d_dominio.pdf</label>
                                    <input type="file" id="licencia_d" name="licencia_d" accept="application/pdf" class="form-control" size="30">
                                </div>
                                <br><br><br>
                                <div calss="form-group">
                                    <label class="control-label">cedula_d_dominio.pdf</label>
                                    <input type="file" id="cedula_v_d" name="cedula_v_d" accept="application/pdf" class="form-control" size="30">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">FECHA TURNO RENOVACION VTV</label>
                                    <input type="date" id="fecha_vtv_renueva" name="fecha_vtv_renueva" class="form-control" size="30">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">gas_D_deminio.pdf</label>
                                    <input type="file" id="gas_d" name="gas_d" accept="application/pdf" class="form-control" size="30">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">hab_remis_d_dominio.pdf</label>
                                    <input type="file" id="hab_d" name="hab_d" accept="application/pdf" class="form-control" size="30">
                                </div>
                            </div>


                            <!-- Columna 3  -->
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="MODELO" name="modelo" id="modelo" autofocus>
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">FECHA VTO PATENTE</label>
                                    <input type="date" id="fecha_patente" name="fecha_patente" class="form-control" size="30">
                                </div>
                                <br><br><br><br>
                                <br><br><br><br><br><br><br>
                                <div calss="form-group">
                                    <label class="control-label">FECHA VTO LICENCIA</label>
                                    <input type="date" id="fecha_licencia" name="fecha_licencia" class="form-control" size="30">
                                </div>


                                <div calss="form-group">
                                    <label class="control-label">FECHA VTO SEGURO</label>
                                    <input type="date" id="fecha_seg" name="fecha_seg" class="form-control" size="30">
                                </div>
                                <br><br><br>
                                <div calss="form-group">
                                    <label class="control-label">VTO VTV</label>
                                    <input type="date" id="fecha_vtv" name="fecha_vtv" class="form-control" size="30">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">VTO GAS</label>
                                    <input type="date" id="fecha_gas" name="fecha_gas" class="form-control" size="30">
                                </div>
                                <div calss="form-group">
                                    <label class="control-label">VTO HAB</label>
                                    <input type="date" id="fecha_hab" name="fecha_h" class="form-control" size="30">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="../../index.php" class="btn btn-success">Salir</a>
                            <input type="submit" class="btn btn-success" value="añadir unidad">
                        </div>
                    </div>
                </div>
                <br><br>
            </form>
        </div>
    </div>
    </div>
    </div>

    <br><br>
    <?php foot() ?>
</body>

</html>