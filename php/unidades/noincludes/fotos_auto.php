<?php

// SUBRUTINA PARA SUBIR IMAGEN AL SERVIDOR Y GUARDAR LA RUTA
// Ruta donde se guardarán los archivos
$directorio = '../../images/';

// Verifica si la carpeta existe, si no, la crea
if (!is_dir($directorio)) {
    mkdir($directorio, 0755, true);
}

// Verificar que se hayan subido ambos archivos
if (isset($_FILES['auto_f']) && isset($_FILES['auto_d'])) {
    $archivo1 = $_FILES['auto_f'];
    $archivo2 = $_FILES['auto_d'];

    // Validar que ambos archivos sean imágenes JPG
    $extensiones_permitidas = array('jpg', 'jpeg');
    $extension1 = pathinfo($archivo1['name'], PATHINFO_EXTENSION);
    $extension2 = pathinfo($archivo2['name'], PATHINFO_EXTENSION);

    if (in_array(strtolower($extension1), $extensiones_permitidas) && in_array(strtolower($extension2), $extensiones_permitidas)) {
        // Guardar los archivos en el directorio "uploads"
        //echo "<br>";
        //echo "Ruta de la foto del auto frente: ";
        $ruta_foto_1 = $directorio . basename($archivo1['name']);
        //echo "<br>";
        //echo "Ruta de la foto del auto atras: ";  
        $ruta_foto_2 = $directorio . basename($archivo2['name']);
        //echo "<br>";

        if (move_uploaded_file($archivo1['tmp_name'], $ruta_foto_1) && move_uploaded_file($archivo2['tmp_name'], $ruta_foto_2)) {
            echo "Fotos del auto subidas exitosamente.";
            echo "<br>";
            //echo "<br>";
        } else {
            echo "Hubo un error al subir las fotos del auto.";
            exit();
        }
    } else {
        echo "Solo se permiten archivos con formato JPG para las fotos del auto.";
        echo "<br>";
    }
} else {
    echo "Por favor, selecciona dos fotos para el auto.";
}

//----------------------------------------------------------
//----------------------------------------------------------
