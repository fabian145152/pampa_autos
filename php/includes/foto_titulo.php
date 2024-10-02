<?php
//include_once "../../funciones/funciones.php";


// SUBRUTINA PARA SUBIR IMAGEN AL SERVIDOR Y GUARDAR LA RUTA
// Ruta donde se guardarán los archivos
$directorio = '../../images/';

// Verifica si la carpeta existe, si no, la crea
if (!is_dir($directorio)) {
    mkdir($directorio, 0755, true);
}

// Verificar que se hayan subido ambos archivos
if (
    isset($_FILES['titulo_f'])
    && isset($_FILES['titulo_d'])
) {
    $archivo1 = $_FILES['titulo_f'];
    $archivo2 = $_FILES['titulo_d'];

    // Validar que ambos archivos sean imágenes JPG
    $extensiones_permitidas = array('jpg', 'jpeg', 'pdf');
    $extension1 = pathinfo($archivo1['name'], PATHINFO_EXTENSION);
    $extension2 = pathinfo($archivo2['name'], PATHINFO_EXTENSION);

    if (
        in_array(strtolower($extension1), $extensiones_permitidas)
        && in_array(strtolower($extension2), $extensiones_permitidas)
    ) {
        // Guardar los archivos en el directorio "uploads"
        //echo "<br>";
        //echo "Ruta de la foto del auto frente: ";
        echo $titulo_f = $directorio . basename($archivo1['name']);
        //echo "<br>";
        //echo "Ruta de la foto del auto atras: ";  
        echo $titulo_d = $directorio . basename($archivo2['name']);
        //echo "<br>";

        if (
            move_uploaded_file($archivo1['tmp_name'], $titulo_f)
            && move_uploaded_file($archivo2['tmp_name'], $titulo_d)
        ) {
            echo "Fotos del auto subidas exitosamente.";
            echo "<br>";
            //echo "<br>";
        } else {
            echo "Hubo un error al subir las fotos del auto.";
            exit();
        }
    } else {
        echo "Solo se permiten archivos con formato jpg, lpeg o pdf para las fotos del auto.";
        echo "<br>";
    }
} else {
    echo "Por favor, selecciona dos fotos para el auto.";
}

//----------------------------------------------------------
