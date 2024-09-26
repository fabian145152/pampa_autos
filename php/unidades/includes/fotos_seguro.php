<?php



$uploadDir = '../../images/';

// Verificar si la carpeta existe, si no, crearla
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Verificar si los archivos han sido subidos correctamente
if (isset($_FILES['seguro_f'])) {
    $file1 = $_FILES['seguro_f'];


    // Validar que los archivos sean PDFs
    $allowedTypes = ['application/pdf'];

    if (in_array($file1['type'], $allowedTypes)) {
        // Mover los archivos a la carpeta de destino
        $file1Name = basename($file1['name']);

        //echo "Ruta seguro: ";
        $filePath_seguro = $uploadDir . $file1Name;
        //echo "<br>";
        //echo "Fecha de vencimiento seguro: ";
        $vto_seguro;
        //echo "<br>";

        if (move_uploaded_file($file1['tmp_name'], $filePath_seguro)) {
            echo "Archivo de la patente subido con éxito.<br>";
          

            //echo "Archivo 1: <a href='$file1Path'>$file1Name</a><br>";
            // echo "Archivo 2: <a href='$file2Path'>$file2Name</a>";

        } else {
            echo "Hubo un error al subir los archivos del seguro en pdf.";
            echo "<br>";
            exit;
        }
    } else {
        echo "Para la patente solo se permiten archivos PDF.";
        echo "<br>";
    }
} else {
    echo "Por favor, sube dos archivos PDF para la seguro.";
    echo "<br>";
}

//------------------------------------------------------------------------------------------------------------------------------------
