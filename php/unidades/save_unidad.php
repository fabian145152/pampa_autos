<?php
include_once "../../funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");



$movil = $_POST['movil'];
$dominio = $_POST['dominio'];
$fecha_patente = $_POST['fecha_patente'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$año = $_POST['anio'];
$fecha_licencia = $_POST['fecha_licencia'];
$vto_seguro = $_POST['fecha_seg'];
$fecha_vto_vtv = $_POST['fecha_vtv'];
$fecha_vtv_renueva = $_POST['fecha_vtv_renueva'];
$fecha_vto_gas = $_POST['fecha_gas'];
$fecha_vto_hab = $_POST['fecha_h'];



// SUBRUTINA PARA SUBIR IMAGEN AL SERVIDOR Y GUARDAR LA RUTA
include_once "includes/fotos_auto.php";

// SUBRUTINA PARA SUBIR TITULO EN PDF FRENTE Y DORSO
include_once "includes/fotos_titulo.php";

## SUBRUTINA PARA SUBIR 2 FOTOS DE LICENCIA DE TAXI EN PDF
include_once "includes/fotos_licencia.php";

## SUBRUTINA PARA SUBIR 1 FOTOS DE LA PATENTE EN PDF
include_once "includes/fotos_patente.php";

## SUBRUTINA PARA SUBIR EL SEGURO EN PDF
include_once "includes/fotos_seguro.php";

## SUBRUTINA PARA SUBIR LA VTV EN PDF
include_once "includes/fotos_vtv.php";

## SUBRUTINA PARA SUBIR LA OBLEA DE GAS EN PDF
include_once "includes/fotos_gas.php";

## SUBRUTINA PARA SUBIR LA HABILITACION DE REMIS EN PDF
include_once "includes/fotos_habilitacion.php";


$stmt = $con->prepare("INSERT INTO autos (numero, 
                                                marca, 
                                                modelo, 
                                                dominio, 
                                                dominio_f, 
                                                dominio_fecha,
                                                color,
                                                año,
                                                foto_1,
                                                foto_2,
                                                titulo_f,
                                                titulo_d,
                                                licencia_f, 
                                                licencia_d, 
                                                licencia_vto,
                                                seguro_f,
                                                seguro_vto,
                                                vtv_f,
                                                vtv_vto,
                                                vtv_renueva,
                                                gas_f,
                                                gas_d,
                                                gas_vto,
                                                hab_f,
                                                hab_d,
                                                hab_vto
                                                 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param(
    "issssssissssssssssssssssss",
    $movil,
    $marca,
    $modelo,
    $dominio,
    $filePath_patente,
    $fecha_patente,
    $color,
    $año,
    $ruta_foto_1,
    $ruta_foto_2,
    $file_titulo_f,
    $file_titulo_d,
    $file_licencia_f,
    $file_licencia_d,
    $fecha_licencia,
    $filePath_seguro,
    $vto_seguro,
    $filePath_vtv,
    $fecha_vto_vtv,
    $fecha_vtv_renueva,
    $file_gas_f,
    $file_gas_d,
    $fecha_vto_gas,
    $file_hab_f,
    $file_hab_d,
    $fecha_vto_hab
);


if ($stmt->execute()) {
    echo "<br>";
    echo "<br>";
    echo "Nuevo registro insertado exitosamente.";
    echo "<br>";
    echo "<br>";
?>
    <script>
        alert("producto ingresado")
        window.location = "../../index.php";
    </script>
<?php
} else {
    echo "Error: " . $stmt->error;
    exit;
}
