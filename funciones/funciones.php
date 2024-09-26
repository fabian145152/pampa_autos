<?php


## 1    conexion a la base de datos
function conexion()
{
    $con = new mysqli("127.0.0.1", "root", "belgrado", "autos_pampa", 3306);
    if ($con->connect_errno) {
        echo "<br><br><br><br><br>";
        echo "Fallo al conectar a la DDBB: (" . $con->connect_errno . ") " . $con->connect_error;
    }
    return $con;
}

## 2    actualiza semana

function leerArchivoTXT($rutaArchivo)
{

    // Verificar si el archivo existe
    if (file_exists($rutaArchivo)) {
        // Leer el contenido del archivo
        $contenido = file_get_contents($rutaArchivo);
        return $contenido;
    } else {
        return "El archivo no existe.";
    }
}


## 3   pie de pagina
function foot()
{
?>
    <style>
        .footer {
            width: 100%;
            bottom: 0;
            height: 30px;
            position: fixed;
            background: #fff;
            box-shadow: 1px 1px 5px #000;
            text-align: center;
        }
    </style>

    <div class="footer">Ver 1.0</div>
<?php
}

##   4     encabezado de pagina
function head()
{
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ultima.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootbox.min.js"></script>

<?php
}

function aviso10DiasAntes($fecha)
{
    // Fecha actual
    $hoy = new DateTime();

    // Crear un objeto DateTime a partir de la fecha proporcionada
    $fechaObjetivo = new DateTime($fecha);

    // Restar 10 días a la fecha objetivo
    $fechaAviso = clone $fechaObjetivo;
    $fechaAviso->modify('-10 days');

    // Comparar la fecha de aviso con la fecha actual
    if ($hoy >= $fechaAviso && $hoy <= $fechaObjetivo) {
        echo "<p style='color: red;'><strong>Ojo...$fecha</strong></p>";
        //echo "Aviso: Faltan 10 días o menos para la fecha objetivo ($fecha).";
    } /*else {
        echo "No hay aviso, aún faltan más de 10 días o ya ha pasado la fecha objetivo.";
    }
        */
    if ($hoy >= $fechaAviso && $hoy >= $fechaObjetivo) {
        echo "<p style='color: red;'><strong>Ojo...$fecha</strong><br></p>";
        echo "Aviso: se paso la fecha objetivo.";
    }
}
