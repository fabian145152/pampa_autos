<?php



$uploadDir = '../../images/';

// Verificar si la carpeta existe, si no, crearla
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Verificar si los archivos han sido subidos correctamente
if (isset($_FILES['titulo_f']) && isset($_FILES['titulo_d'])) {
    $file1 = $_FILES['titulo_f'];
    $file2 = $_FILES['titulo_d'];

    // Validar que los archivos sean PDFs
    $allowedTypes = ['application/pdf'];

    if (in_array($file1['type'], $allowedTypes) && in_array($file2['type'], $allowedTypes)) {
        // Mover los archivos a la carpeta de destino

        $file1Name = basename($file1['name']);

        $file2Name = basename($file2['name']);
        //echo "<br>";
        //echo "Ruta del Titulo frente: ";
        $file_titulo_f = $uploadDir . $file1Name;
        //echo "<br>";
        //echo "Ruta del Titulo dorso: ";
        $file_titulo_d = $uploadDir . $file2Name;
        //echo "<br>";

        if (move_uploaded_file($file1['tmp_name'], $file_titulo_f) && move_uploaded_file($file2['tmp_name'], $file_titulo_d)) {
            echo "Ambos archivos del titulo fueron subidos con éxito.<br>";
            //echo "Archivo 1: <a href='$file1Path'>$file1Name</a><br>";
            // echo "Archivo 2: <a href='$file2Path'>$file2Name</a>";
        } else {
            echo "Hubo un error al subir el titulo dela auto.";
            echo "<br>";
            exit;
        }
    } else {
        echo "Para el titulo del auto solo se permiten archivos PDF.";
        echo "<br>";
    }
} else {
    echo "Por favor, sube dos archivos PDF para el titulo.";
    echo "<br>";
}
//------------------------------------------------------------------------------------------------------------------------------------
