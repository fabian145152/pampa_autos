<?php
include_once "../../funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");
echo $id = $_POST['id'];


echo "<br>";
echo $modelo = $_POST['modelo'];
echo "<br>";
echo $dominio = $_POST['dominio'];
echo "<br>";
echo $titulo = $_POST['titulo'];
echo "<br>";
echo $cedula_verde = $_POST['cedula_verde'];
echo "<br>";
echo $vtv_vto = $_POST['vtv_vto'];
echo "<br>";
echo $gas_vto = $_POST['gas_vto'];
echo "<br>";
echo $hab_vto = $_POST['hab_vto'];
echo "<br>";

//exit;

$sql = "UPDATE autos SET                                     
                        modelo='$modelo',
                        dominio='$dominio',        
                        titulo='$titulo',                      
                        cedula_verde='$cedula_verde',
                        licencia_vto='$licencia_vto',                                         
                        vtv_vto='$vtv_vto',                                        
                        gas_vto='$gas_vto',                        
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

header('Location:lista_autos.php');
