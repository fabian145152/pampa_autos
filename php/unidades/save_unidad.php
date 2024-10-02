<?php
include_once "../../funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");


echo $modelo = $_POST['modelo'];
echo "<br>";
echo $dominio = $_POST['dominio'];
echo "<br>";
echo $fecha_vto_gas = $_POST['fecha_gas'];
echo "<br>";
echo $fecha_vto_vtv = $_POST['fecha_vtv'];
echo "<br>";
echo $fecha_vto_hab = $_POST['fecha_h'];
echo "<br>";

include_once "../includes/foto_titulo.php";
include_once "../includes/fotos_cedula.php";

$stmt = $con->prepare("INSERT INTO autos (                                               
                                                modelo, 
                                                dominio,
                                                cedula_f,
                                                cedula_d,
                                                titulo_f,
                                                titulo_d,
                                                gas_vto,
                                                vtv_vto,
                                                hab_vto                                              
                                                 ) VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->bind_param(
    "sssssssss",
    $modelo,
    $dominio,
    $cedula_f,
    $cedula_d,
    $titulo_f,
    $titulo_d,
    $fecha_vto_gas,
    $fecha_vto_vtv,
    $fecha_vto_hab
);

echo $cedula_f;
echo $cedula_d;
echo $titulo_f;
echo $titulo_d;


if ($stmt->execute()) {
    echo "<br>";
    echo "<br>";
    echo "Nuevo registro insertado exitosamente.";
    echo "<br>";
    echo "<br>";

?>
    <script>
        alert("producto ingresado")
        window.location = "lista_autos.php";
    </script>
<?php
} else {
    echo "Errorrrrrr: " . $stmt->error;
    exit;
}
