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
                    <label for="lname">MODELO</label>
                </div>
                <div class="col-25">
                    <input type="text" id="modelo" name="modelo" value="<?php echo $row['modelo'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">DOMINIO</label>
                </div>
                <div class="col-25">
                    <input type="text" id="dominio" name="dominio" value="<?php echo $row['dominio'] ?>">
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="lname">TITULO</label>
                </div>
                <div class="col-25">

                    <select id="titulo" name="titulo">
                        <option value="<?php echo $row['titulo'] ?>"><?php echo $row['titulo'] ?></option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>

                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="lname">CEDULA VERDE</label>
                </div>
                <div class="col-25">

                    <select id="cedula_verde" name="cedula_verde">
                        <option value="<?php echo $row['cedula_verde'] ?>"><?php echo $row['cedula_verde'] ?></option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>

                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="lname">GAS VENCIMIENTO</label>
                </div>
                <div class="col-25">
                    <input type="date" id="gas_vto" name="gas_vto" value="<?php echo $row['gas_vto'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">VTV VENCIMIENTO</label>
                </div>
                <div class="col-25">
                    <input type="date" id="vtv_vto" name="vtv_vto" value="<?php echo $row['vtv_vto'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">HABILITACION VENCIMIENTO</label>
                </div>
                <div class="col-25">
                    <input type="date" id="hab_vto" name="hab_vto" value="<?php echo $row['hab_vto'] ?>">
                </div>
            </div>


            <br>
            <div class="col-25">

                <input type="submit" value="GUARDAR" style="text-align: center;">
            </div>
    </div>
    </form>
    </div>
    <br><br><br>
    <?php foot() ?>
</body>

</html>