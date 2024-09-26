<?php
include_once "../../funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");

echo $id = $_POST['id'];
echo $movil = $_POST['numero'];
echo "<br>";
echo $marca = $_POST['marca'];
echo "<br>";
echo $modelo = $_POST['modelo'];
echo "<br>";
echo $dominio = $_POST['dominio'];
echo "<br>";
echo $dominio_fecha = $_POST['dominio_fecha'];
echo "<br>";
echo $dominio_pdf = $_POST['dominio_f'];
echo "<br>";
echo $color = $_POST['color'];
echo "<br>";
echo $año = $_POST['año'];
echo "<br>";
echo $foto_1 = $_POST['foto_1'];
echo "<br>";
echo $foto_2 = $_POST['foto_2'];
echo "<br>";
echo $titulo_f = $_POST['titulo_f'];
echo "<br>";
echo $titulo_d = $_POST['titulo_d'];
echo "<br>";
echo $licencia_f = $_POST['licencia_f'];
echo "<br>";
echo $licencia_d = $_POST['licencia_d'];
echo "<br>";
echo $licencia_vto = $_POST['licencia_vto'];
echo "<br>";
echo $seguro_f = $_POST['seguro_f'];
echo "<br>";
echo $seguro_vto = $_POST['seguro_vto'];
echo "<br>";
echo $vtv_f = $_POST['vtv_f'];
echo "<br>";
echo $vtv_vto = $_POST['vtv_vto'];
echo "<br>";
echo $vtv_renueva = $_POST['vtv_renueva'];
echo "<br>";
echo $gas_f = $_POST['gas_f'];
echo "<br>";
echo $gas_d = $_POST['gas_d'];
echo "<br>";
echo $gas_vto = $_POST['gas_vto'];
echo "<br>";
echo $hab_f = $_POST['hab_f'];
echo "<br>";
echo $hab_d = $_POST['hab_d'];
echo "<br>";
echo $hab_vto = $_POST['hab_vto'];
echo "<br>";

//exit;

$sql = "UPDATE autos SET 
                        numero='$movil',
                        marca='$marca',
                        modelo='$modelo',
                        dominio='$dominio',
                        dominio_f='$dominio_pdf',
                        dominio_fecha='$dominio_fecha',
                        color='$color',
                        año='$año',
                        foto_1='$foto_1',
                        foto_2='$foto_2',
                        titulo_f='$titulo_f',
                        titulo_d='$titulo_d',
                        licencia_f='$licencia_f',
                        licencia_d='$licencia_d',
                        licencia_vto='$licencia_vto',
                        seguro_f='$seguro_f',
                        seguro_vto='$seguro_vto',
                        vtv_f='$vtv_f',
                        vtv_vto='$vtv_vto',
                        vtv_renueva='$vtv_renueva',
                        gas_f='$gas_f',
                        gas_d='$gas_d',
                        gas_vto='$gas_vto',
                        hab_f='$hab_f',
                        hab_d='$hab_d',
                        hab_vto='$hab_vto'
    WHERE id=" . $id;


// Ejecutar la consulta
if ($con->query($sql) === TRUE) {
    if ($con->affected_rows > 0) {
        echo "Actualización exitosa. Se modificaron " . $con->affected_rows . " filas.";
    } else {
        echo "No se realizaron cambios. Puede que no existan coincidencias o el valor ya sea el mismo.";
    }
} else {
    echo "Error al actualizar: " . $con->error;
}

header('Location:../../index.php');
