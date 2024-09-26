<?php



//  5    SUBRUTINA PARA SUBIR LA HABILITACION EN PDF FRENTE Y DORSO
$uploadDir = '../../images/';

// Verificar si la carpeta existe, si no, crearla
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Verificar si los archivos han sido subidos correctamente
if (isset($_FILES['hab_f']) && isset($_FILES['hab_d'])) {
    $file11 = $_FILES['hab_f'];
    $file12 = $_FILES['hab_d'];

    // Validar que los archivos sean PDFs
    $allowedTypes = ['application/pdf'];

    if (in_array($file11['type'], $allowedTypes) && in_array($file12['type'], $allowedTypes)) {
        // Mover los archivos a la carpeta de destino

        $file11Name = basename($file11['name']);

        $file12Name = basename($file12['name']);
        echo "<br>";
        echo "Ruta del archio de habilitacion de remis frente: " . $file_hab_f = $uploadDir . $file11Name;
        echo "<br>";
        echo "Ruta del archio de habilitacion de remis dorso: " . $file_hab_d = $uploadDir . $file12Name;
        echo "<br>";
        echo "Fecha Vto habilitacion" . $fecha_vto_hab;

        if (move_uploaded_file($file11['tmp_name'], $file_hab_f) && move_uploaded_file($file12['tmp_name'], $file_hab_d)) {
            echo "Ambos archivos fueron subidos con éxito.<br>";
            echo "<br>";
            echo "<br>";
            //echo "Archivo 1: <a href='$file1Path'>$file1Name</a><br>";
            // echo "Archivo 2: <a href='$file2Path'>$file2Name</a>";
        } else {
            echo "Hubo un error al subir los archivos.";
            echo "<br>";
            exit;
        }
    } else {
        echo "Para la habilitacion de remis del auto solo se permiten archivos PDF.";
        echo "<br>";
    }
} else {
    echo "Por favor, sube dos archivos PDF.";
    echo "<br>";
}
//------------------------------------------------------------------------------------------------------------------------------------
