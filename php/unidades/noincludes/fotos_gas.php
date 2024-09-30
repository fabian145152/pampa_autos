<?php



//  5    SUBRUTINA PARA SUBIR LA OBLEA DEL GAS EN PDF FRENTE Y DORSO
$uploadDir = '../../images/';

// Verificar si la carpeta existe, si no, crearla
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Verificar si los archivos han sido subidos correctamente
if (isset($_FILES['gas_f']) && isset($_FILES['gas_d'])) {
    $file13 = $_FILES['gas_f'];
    $file23 = $_FILES['gas_d'];

    // Validar que los archivos sean PDFs
    $allowedTypes = ['application/pdf'];

    if (in_array($file13['type'], $allowedTypes) && in_array($file23['type'], $allowedTypes)) {
        // Mover los archivos a la carpeta de destino

        $file13Name = basename($file13['name']);

        $file23Name = basename($file23['name']);
        echo "<br>";
        echo "Ruta del archio de la oblea del gas frente: " . $file_gas_f = $uploadDir . $file13Name;
        echo "<br>";
        echo "Ruta del archio de la oblea del gas dorso: " . $file_gas_d = $uploadDir . $file23Name;
        echo "<br>";
        echo "Fecha de vencimineto de la oblea del gas: " . $fecha_vto_gas;
        echo "<br>";

        if (move_uploaded_file($file13['tmp_name'], $file_gas_f) && move_uploaded_file($file23['tmp_name'], $file_gas_d)) {
            echo "Ambos archivos fueron subidos con éxito.<br>";
            echo "<br>";
            echo "<br>";
            //echo "Archivo 1: <a href='$file1Path'>$file1Name</a><br>";
            // echo "Archivo 2: <a href='$file2Path'>$file2Name</a>";
        } else {
            echo "Hubo un error al subir los archivos.";
            exit;
            
        }
    } else {
        echo "Para la oblea del gas solo se permiten archivos PDF.";
        echo "<br>";
    }
} else {
    echo "Por favor, sube dos archivos PDF.";
    echo "<br>";
}
//------------------------------------------------------------------------------------------------------------------------------------
