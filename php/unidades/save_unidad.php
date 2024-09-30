<?php
include_once "../../funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");



echo $modelo = $_POST['modelo'];
echo "<br>";
echo $dominio = $_POST['dominio'];
echo "<br>";
echo $titulo = $_POST['titulo'];
echo "<br>";
echo $cedula_verde = $_POST['cedula_verde'];
echo "<br>";
echo $fecha_vto_gas = $_POST['fecha_gas'];
echo "<br>";
echo $fecha_vto_vtv = $_POST['fecha_vtv'];
echo "<br>";
echo $fecha_vto_hab = $_POST['fecha_h'];
echo "<br>";




$stmt = $con->prepare("INSERT INTO autos (                                               
                                                modelo, 
                                                dominio,
                                                titulo,
                                                cedula_verde,
                                                gas_vto,
                                                vtv_vto,
                                                hab_vto
                                              
                                                 ) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param(
    "sssssss",
    
    $modelo,
    $dominio,
    $titulo,
    $cedula_verde,
    $fecha_vto_gas,
    $fecha_vto_vtv,
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
        window.location = "lista_autos.php";
    </script>
<?php
} else {
    echo "Error: " . $stmt->error;
    exit;
}
