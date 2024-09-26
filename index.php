<?php
include_once "funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");


$sql_autos = "SELECT * FROM autos WHERE 1";
$result = $con->query($sql_autos);

echo $fecha_de__hoy = date("Y-m-d");
echo "<br>";
$timestamp = strtotime($fecha_de__hoy);
$diaDelAño = date('z', $timestamp) + 1; // +1 porque 'z' empieza desde 0
echo "El día del año es: " . $diaDelAño;
echo "<br>";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOS PAMPA</title>
    <?php // head() 
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ultima.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootbox.min.js"></script>

    <script>
        function deleteProduct(cod_unidad) {
            bootbox.confirm("Desea Eliminar?" + cod_unidad, function(result) {
                if (result) {
                    window.location = "php/unidades/borrar_unidad.php?q=" + cod_unidad;
                }
            });
        }

        function updateProduct(cod_unidad) {
            window.location = "php/unidades/edit_unidad.php?q=" + cod_unidad;
        }
    </script>
</head>

<body>
<h1>Esta es la tabla con fotos a medio armar</h1>
    <table class="table table-bordered table-sm table-hover">
        <thead class="thead-dark">
            <a href="php/unidades/nueva_unidad.php">NUEVA UNIDAD</a>
            <tr>

                <th>Modelo</th>
                <th>Dominio</th>
                <th>Titulo</th>
                <th>Cedula Verde</th>

                <th>GNC</th>
                <th>VTV</th>
                <th>Habilitacion</th>

               
            </tr>
        </thead>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tbody>
                <?php $row['id'] ?>
                <?php $row['numero'] ?>
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

                <td><?php echo "Vto: " . $fecha = $row['gas_vto'];
                    echo "<br>";
                    aviso10DiasAntes($fecha);
                    ?>
                <td><?php echo $row['hab_vto'] ?></td>
                <td><?php echo $row['vtv_vto'] ?></td>

                <td><a class="btn btn-success" href="php/unidades/detalles_unidad.php?id=<?php echo $row['id'] ?>">Detalles</a></td>
                <a href="php/unidades/detalles_unidad.php"></a>
                <td><a class="btn btn-success" href="#" onclick="updateProduct(<?php echo $row['id']; ?>)">Editar</td>
                <td><a class="btn btn-danger" href="#" onclick="deleteProduct(<?php echo $row['id']; ?>)">Eliminar</td>
            </tbody>
        <?php
        }
        ?>
        <?php foot() ?>
</body>

</html>