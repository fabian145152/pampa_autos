<?php
include_once "../../funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");
$id = $_GET['q'];

$sql_unidad = "SELECT * FROM autos WHERE id =" . $id;
$result = $con->query($sql_unidad);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR UNIDAD</title>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],
        input[type=date],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>

    <h2>EDITAR UNIDADES</h2>

    <div class="container">
        <form action="update_unidad.php" method="post">

            <div class="row">
                <div class="col-25">
                </div>
                <div class="col-75">
                    <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">UNIDAD</label>
                </div>
                <div class="col-75">
                    <input type="text" id="numero" name="numero" value="<?php echo $row['numero'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">MARCA</label>
                </div>
                <div class="col-75">
                    <input type="text" id="marca" name="marca" value="<?php echo $row['marca'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">MODELO</label>
                </div>
                <div class="col-75">
                    <input type="text" id="modelo" name="modelo" value="<?php echo $row['modelo'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">DOMINIO</label>
                </div>
                <div class="col-75">
                    <input type="text" id="dominio" name="dominio" value="<?php echo $row['dominio'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">FECHA DE VENCIMIENTO DE LA PATENTE</label>
                </div>
                <div class="col-75">
                    <input type="date" id="dominio_fecha" name="dominio_fecha" value="<?php echo $row['dominio_fecha'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">IMAGEN DEL RECIBO DE PATENTE</label>
                </div>
                <div class="col-25">
                    <input type="text" id="dominio_f" name="dominio_f" value="<?php echo $row['dominio_f'] ?>">
                </div>
                <div class="col-30">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">COLOR</label>
                </div>
                <div class="col-75">
                    <input type="text" id="color" name="color" value="<?php echo $row['color'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">AÑO</label>
                </div>
                <div class="col-75">
                    <input type="text" id="año" name="año" value="<?php echo $row['año'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">FOTO AUTO VISTA FRENTE</label>
                </div>
                <div class="col-25">
                    <input type="text" id="foto_1" name="foto_1" value="<?php echo $row['foto_1'] ?>">
                </div>
                <div class="col-30">
                    <a href="">CAMBIA IMAGEN</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">FOTO AUTO VISTA TRASERA</label>
                </div>
                <div class="col-25">
                    <input type="text" id="foto_2" name="foto_2" value="<?php echo $row['foto_2'] ?>">
                </div>
                <div class="col-30">
                    <a href="">CAMBIA IMAGEN</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">TITULO DEL AUTO FRENTE</label>
                </div>
                <div class="col-25">
                    <input type="text" id="titulo_f" name="titulo_f" value="<?php echo $row['titulo_f'] ?>">
                </div>
                <div class="col-30">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">TITULO DEL AUTO dorso</label>
                </div>
                <div class="col-25">
                    <input type="text" id="titulo_d" name="titulo_d" value="<?php echo $row['titulo_d'] ?>">
                </div>
                <div class="col-30">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">LICENCIA TAXI FRENTE</label>
                </div>
                <div class="col-25">
                    <input type="text" id="licencia_f" name="licencia_f" value="<?php echo $row['licencia_f'] ?>">
                </div>
                <div class="col-50">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">LICENCIA TAXI DORSO</label>
                </div>
                <div class="col-25">
                    <input type="text" id="licencia_d" name="licencia_d" value="<?php echo $row['licencia_d'] ?>">
                </div>
                <div class="col-50">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">FECHA DE VENCIMIENTO DE LA LICENCIA</label>
                </div>
                <div class="col-75">
                    <input type="date" id="licencia_vto" name="licencia_vto" value="<?php echo $row['licencia_vto'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">SEGURO</label>
                </div>
                <div class="col-25">
                    <input type="text" id="seguro_f" name="seguro_f" value="<?php echo $row['seguro_f'] ?>">
                </div>
                <div class="col-50">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">SEGURO VENCIMIENTO</label>
                </div>
                <div class="col-75">
                    <input type="date" id="seguro_vto" name="seguro_vto" value="<?php echo $row['seguro_vto'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">VTV</label>
                </div>
                <div class="col-25">
                    <input type="text" id="vtv_f" name="vtv_f" value="<?php echo $row['vtv_f'] ?>">
                </div>
                <div class="col-50">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">VTV VENCIMIENTO</label>
                </div>
                <div class="col-75">
                    <input type="date" id="vtv_vto" name="vtv_vto" value="<?php echo $row['vtv_vto'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">RENOVAVION DE LA VTV</label>
                </div>
                <div class="col-75">
                    <input type="date" id="vtv_renueva" name="vtv_renueva" value="<?php echo $row['vtv_renueva'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">GAS FRENTE</label>
                </div>
                <div class="col-25">
                    <input type="text" id="gas_f" name="gas_f" value="<?php echo $row['gas_f'] ?>">
                </div>
                <div class="col-50">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">GAS DORSO</label>
                </div>
                <div class="col-25">
                    <input type="text" id="gas_d" name="gas_d" value="<?php echo $row['gas_d'] ?>">
                </div>
                <div class="col-50">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">GAS VENCIMIENTO</label>
                </div>
                <div class="col-75">
                    <input type="date" id="gas_vto" name="gas_vto" value="<?php echo $row['gas_vto'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">HABILITACION FRENTE</label>
                </div>
                <div class="col-25">
                    <input type="text" id="hab_f" name="hab_f" value="<?php echo $row['hab_f'] ?>">
                </div>
                <div class="col-50">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">HABILITACION DORSO</label>
                </div>
                <div class="col-25">
                    <input type="text" id="hab_d" name="hab_d" value="<?php echo $row['hab_d'] ?>">
                </div>
                <div class="col-50">
                    <a href="">CAMBIA PDF</a>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">HABILITACION VENCIMIENTO</label>
                </div>
                <div class="col-75">
                    <input type="date" id="hab_vto" name="hab_vto" value="<?php echo $row['hab_vto'] ?>">
                </div>
            </div>


            <br>
            <input type="submit" value="Submit">
    </div>
    </form>
    </div>
    <br><br><br>
    <?php foot() ?>
</body>

</html>