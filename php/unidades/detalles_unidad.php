<?php
include_once "../../funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");
$id = $_GET['id'];
$sql_autos = "SELECT * FROM autos WHERE ID =" . $id;
$result = $con->query($sql_autos);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIDAD <?php echo $row['numero'] ?></title>
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
                <div class="col-25">
                    <input type="text" id="" name="" value="<?php echo $row['numero'] ?>">
                </div>
                <div class="col-25">
                    <input type="text" id="" name="" value="<?php echo $row['marca'] ?>">
                </div>
                <div class="col-25">
                    <input type="text" id="" name="" value="<?php echo $row['modelo'] ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-25"></div>
                <div class="col-25">
                    <input type="text" id="" name="" value="<?php echo $row['dominio'] ?>">
                </div>
                <div class="col-25">
                    <input type="text" id="" name="" value="<?php echo $row['año'] ?>">
                </div>

                <div class="col-25">
                    <input type="text" id="" name="" value="<?php echo $row['color'] ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">VISTAS DEL AUTO</label>
                </div>
                <div class="col-25">
                    <img src="<?php echo $row['foto_1'] ?>" alt="Vista frontal del auto, imagen no disponible" style="width: 250px; height: auto;">
                </div>
                <div class="col-25">
                    <img src="<?php echo $row['foto_2'] ?>" alt="Vista trasera del auto, imagen no disponible" style="width: 250px; height: auto;">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">RECIBO DE PATENTE</label>
                    <label for="lname">FECHA DE VENCIMIENTO</label>
                    <input type="text" id="" name="" value="<?php echo $row['dominio_fecha'] ?>">
                </div>
                <div class="col-25">
                    <embed src="<?php echo $row['dominio_f'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
            </div>

            <div class=" row">
                <div class="col-25">
                    <label for="lname">TITULO DEL AUTO</label>
                </div>
                <div class="col-25">
                    <embed src="<?php echo $row['titulo_f'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
                <div class=" col-25">
                    <embed src="<?php echo $row['titulo_d'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
            </div>



            <div class=" row">
                <div class="col-25">
                    <label for="lname">LICENCIA SI ES TAXI</label>
                    <label for="lname">FECHA DE VENCIMIENTO</label>
                    <input type="text" id="" name="" value="<?php echo $row['licencia_vto'] ?>">
                </div>
                <div class="col-25">
                    <embed src="<?php echo $row['licencia_f'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
                <div class=" col-25">
                    <embed src="<?php echo $row['licencia_d'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
            </div>


            <div class=" row">
                <div class="col-25">
                    <label for="lname">SEGURO</label>
                    <label for="lname">FECHA DE VENCIMIENTO</label>
                    <input type="text" id="" name="" value="<?php echo $row['seguro_vto'] ?>">
                </div>
                <div class="col-25">
                    <embed src="<?php echo $row['seguro_f'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
            </div>

            <div class=" row">
                <div class="col-25">
                    <label for="lname">VTV</label>
                    <label for="lname">FECHA DE VENCIMIENTO</label>
                    <input type="text" id="" name="" value="<?php echo $row['vtv_vto'] ?>">
                    <label for="lname">TURNO PARA RENOVAR</label>
                    <input type="text" id="" name="" value="<?php echo $row['vtv_renueva'] ?>">
                </div>
                <div class="col-25">
                    <embed src="<?php echo $row['vtv_f'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
            </div>

            <div class=" row">
                <div class="col-25">
                    <label for="lname">GAS</label>
                    <label for="lname">FECHA DE VENCIMIENTO</label>
                    <input type="text" id="" name="" value="<?php echo $row['gas_vto'] ?>">
                </div>
                <div class="col-25">
                    <embed src="<?php echo $row['gas_f'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
                <div class="col-25">
                    <embed src="<?php echo $row['gas_d'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
            </div>

            <div class=" row">
                <div class="col-25">
                    <label for="lname">HABILITACION DE REMIS</label>
                    <label for="lname">FECHA DE VENCIMIENTO</label>
                    <input type="text" id="" name="" value="<?php echo $row['hab_vto'] ?>">
                </div>
                <div class="col-25">
                    <embed src="<?php echo $row['hab_f'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
                <div class="col-25">
                    <embed src="<?php echo $row['hab_d'] ?>" type="application/pdf" style="width: 250px; height: auto;">
                </div>
            </div>

        </form>
    </div>
</body>

</html>