<?php

include_once("funciones/funciones.php");
$con = conexion();
$con->set_charset("utf8mb4");

// Obtener la opción seleccionada
$opcionSeleccionada = $_POST['opcion'];

// Verificar la opción seleccionada y mostrar un mensaje
switch ($opcionSeleccionada) {
    case 'opcion1':
        echo "Has seleccionado la Opción 1.";
        break;
    case 'opcion2':
        header("Location: php/unidades/lista_autos.php");
        //echo "Has seleccionado la Opción 2.";
        break;
    case 'opcion3':
        echo "Has seleccionado la Opción 3.";
        break;
    default:
        echo "No has seleccionado una opción válida.";
?>
        <br><br><br>
        <a href="index.php">NO HA SELECCIONADO NINGUNA OPCION</a>
<?php
}

echo "<br>";
echo $pass = $_POST['password'];
exit;


$con->set_charset("utf-8");
$sql = "SELECT * FROM users WHERE (username='$usr' or email='$usr') and (password='$pass')";
$result = $con->query($sql);
$row = $result->fetch_assoc();

if ($row == 0) {
    echo "<h1> Ingreso invalido </h1>";
    echo "<br>";
    echo "<a href='../index.php'>VOLVER</a>";
} else {
    session_start();
    $_SESSION['uname'] = $usr;
    $_SESSION['logueado'] = true;
    $_SESSION['time'] = date('H i s');
    header("location:menu.php");
}
