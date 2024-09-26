<?php

## VTV en PDF

$uploadDir = '../../images/';

// Verificar si la carpeta existe, si no, crearla
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Verificar si los archivos han sido subidos correctamente
if (isset($_FILES['vtv_f'])) {
    $file1 = $_FILES['vtv_f'];


    // Validar que los archivos sean PDFs
    $allowedTypes = ['application/pdf'];

    if (in_array($file1['type'], $allowedTypes)) {
        // Mover los archivos a la carpeta de destino
        $file2Name = basename($file1['name']);

        //echo "Ruta vtv: ";
        $filePath_vtv = $uploadDir . $file2Name;
        //echo "<br>";
        //echo "Fecha de vencimiento vtv: ";
        $fecha_vto_vtv;
        //echo "<br>";
        //echo "Fecha de renovacion vtv: ";
        $fecha_vtv_renueva;;
        //echo "<br>";

        if (move_uploaded_file($file1['tmp_name'], $filePath_vtv)) {
            echo "Archivo de la patente subido con éxito.<br>";
            //echo "Archivo 1: <a href='$file1Path'>$file1Name</a><br>";
            // echo "Archivo 2: <a href='$file2Path'>$file2Name</a>";

        } else {
            echo "Hubo un error al subir los archivos de la vtv en pdf.";
            echo "<br>";
            exit;
        }
    } else {
        echo "Para la vtv solo se permiten archivos PDF.";
        echo "<br>";
    }
} else {
    echo "Por favor, sube dos archivos PDF para la seguro.";
    echo "<br>";
}

//------------------------------------------------------------------------------------------------------------------------------------
