<?php
include_once "../../funciones/funciones.php";
$con = conexion();
$con->set_charset("utf8mb4");
echo $id = $_GET['q'];



$sql = "DELETE FROM autos WHERE id=" . $id;

$result = $con->query($sql);

header("Location:lista_autos.php");
