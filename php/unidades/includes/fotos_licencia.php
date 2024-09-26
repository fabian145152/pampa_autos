<?php



//  5    SUBRUTINA PARA SUBIR LA LICENCIA EN PDF FRENTE Y DORSO
$uploadDir = '../../images/';

// Verificar si la carpeta existe, si no, crearla
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Verificar si los archivos han sido subidos correctamente
if (isset($_FILES['licencia_f']) && isset($_FILES['licencia_d'])) {
    $file1 = $_FILES['licencia_f'];
    $file2 = $_FILES['licencia_d'];

    // Validar que los archivos sean PDFs
    $allowedTypes = ['application/pdf'];

    if (in_array($file1['type'], $allowedTypes) && in_array($file2['type'], $allowedTypes)) {
        // Mover los archivos a la carpeta de destino

        $file1Name = basename($file1['name']);

        $file2Name = basename($file2['name']);
        //echo "<br>";
        //echo "Ruta del archio de licencia frente: ";
        $file_licencia_f = $uploadDir . $file1Name;
        //echo "<br>";
        //echo "Ruta del archio de licencia dorso: ";
        $file_licencia_d = $uploadDir . $file2Name;
        //echo "<br>";

        if (move_uploaded_file($file1['tmp_name'], $file_licencia_f) && move_uploaded_file($file2['tmp_name'], $file_licencia_d)) {
            echo "Ambos archivos de la licencia fueron subidos con éxito.<br>";


            //echo "Archivo 1: <a href='$file1Path'>$file1Name</a><br>";
            // echo "Archivo 2: <a href='$file2Path'>$file2Name</a>";
        } else {
            echo "Hubo un error al subir los archivos de la licencia.";
            echo "<br>";
            exit;
        }
    } else {
        echo "Para la licencia del auto solo se permiten archivos PDF.";
        echo "<br>";
    }
} else {
    echo "Por favor, sube dos archivos PDF para la licencia.";
    echo "<br>";
}
//------------------------------------------------------------------------------------------------------------------------------------
