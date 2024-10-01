<?php
include_once "../../funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");


$sql_autos = "SELECT * FROM autos WHERE 1";
$result = $con->query($sql_autos);

$fecha_de__hoy = date("d-m-Y");

$timestamp = strtotime($fecha_de__hoy);
$diaDelAño = date('z', $timestamp) + 1; // +1 porque 'z' empieza desde 0


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOS PAMPA</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ultima.css">
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/bootbox.min.js"></script>

    <script>
        function deleteProduct(cod_unidad) {
            bootbox.confirm("Desea Eliminar?" + cod_unidad, function(result) {
                if (result) {
                    window.location = "borrar_unidad.php?q=" + cod_unidad;
                }
            });
        }

        function updateProduct(cod_unidad) {
            window.location = "edit_unidad.php?q=" + cod_unidad;
        }
    </script>
</head>

<body>
    <h3>FECHAS DE VENCIMINETOS</h3>
    <table class="table table-bordered table-sm table-hover">
        <thead class="thead-dark">

            <a href="../../index.php" class="btn btn-danger">SALIR</a>

            <tr>

                <th>Modelo</th>
                <th>Dominio</th>
                <th>Titulo</th>
                <th>Cedula Verde</th>
                <th>GNC</th>
                <th>VTV</th>
                <th>Habilitación</th>


            </tr>
        </thead>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tbody>
                <?php $row['id'] ?>

                <td><?php echo $row['modelo'] ?></td>
                <td><?php echo $row['dominio'] ?></td>
                <td><?php $titulo = $row['titulo'];
                    if ($titulo == "si") {
                        echo "SI";
                    } else {
                        echo "NO";
                    }
                    ?>
                </td>
                <td><?php $cedula_verde = $row['cedula_verde'];
                    if ($cedula_verde == "si") {
                        echo "SI";
                    } else {
                        echo "NO";
                    }
                    ?>
                </td>

                <td><?php echo "Vto: " . $fecha_1 = $row['gas_vto'];
                    //echo "<br>";
                    // Fecha actual
                    $hoy = new DateTime();

                    // Crear un objeto DateTime a partir de la fecha proporcionada
                    $fechaObjetivo = new DateTime($fecha_1);

                    // Restar 10 días a la fecha objetivo
                    $fechaAviso = clone $fechaObjetivo;
                    $fechaAviso->modify('-30 days');

                    // Comparar la fecha de aviso con la fecha actual
                    if ($hoy >= $fechaAviso && $hoy <= $fechaObjetivo) {
                        echo "<p style='color: red;'><strong>Ojo...$fecha_1</strong></p>";
                        //echo "Aviso: Faltan 10 días o menos para la fecha objetivo ($fecha).";
                    } /*else {
                           echo "No hay aviso, aún faltan más de 10 días o ya ha pasado la fecha objetivo.";
                     }
                     */
                    if ($hoy >= $fechaAviso && $hoy >= $fechaObjetivo) {
                        echo "<p style='color: red;'><strong>Ojo...$fecha_1</strong><br></p>";
                    }
                    ?>
                </td>

                <td><?php echo "Vto:" . $fecha_2 = $row['vtv_vto'];
                    echo "<br>";
                    $hoy = new DateTime();

                    // Crear un objeto DateTime a partir de la fecha proporcionada
                    $fechaObjetivo = new DateTime($fecha_2);

                    // Restar 10 días a la fecha objetivo
                    $fechaAviso = clone $fechaObjetivo;
                    $fechaAviso->modify('-30 days');

                    // Comparar la fecha de aviso con la fecha actual
                    if ($hoy >= $fechaAviso && $hoy <= $fechaObjetivo) {
                        echo "<p style='color: red;'><strong>Ojo...$fecha_2</strong></p>";
                        //echo "Aviso: Faltan 10 días o menos para la fecha objetivo ($fecha).";
                    } /*else {
                        echo "No hay aviso, aún faltan más de 10 días o ya ha pasado la fecha objetivo.";
                    }
                        */
                    if ($hoy >= $fechaAviso && $hoy >= $fechaObjetivo) {
                        echo "<p style='color: red;'><strong>Ojo...$fecha_2</strong><br></p>";
                    }
                    ?>
                </td>


                <td><?php echo $fecha_3 = $row['hab_vto'];
                    echo "<br>";

                    $hoy = new DateTime();

                    // Crear un objeto DateTime a partir de la fecha proporcionada
                    $fechaObjetivo = new DateTime($fecha_3);

                    // Restar 10 días a la fecha objetivo
                    $fechaAviso = clone $fechaObjetivo;
                    $fechaAviso->modify('-30 days');

                    // Comparar la fecha de aviso con la fecha actual
                    if ($hoy >= $fechaAviso && $hoy <= $fechaObjetivo) {
                        echo "<p style='color: red;'><strong>Ojo...$fecha_3</strong></p>";
                        //echo "Aviso: Faltan 10 días o menos para la fecha objetivo ($fecha).";
                    } /*else {
                        echo "No hay aviso, aún faltan más de 10 días o ya ha pasado la fecha objetivo.";
                    }
                        */
                    if ($hoy >= $fechaAviso && $hoy >= $fechaObjetivo) {
                        echo "<p style='color: red;'><strong>Ojo...$fecha_3</strong><br></p>";
                    }

                    ?>
                </td>

            </tbody>
        <?php
        }
        ?>
        <?php foot() ?>
</body>

</html>