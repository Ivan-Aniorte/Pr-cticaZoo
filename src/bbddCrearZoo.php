<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreZoo = $_POST['nombrezoo'];
    
    // Insertar el zoológico
    $sqlCrearZoo = mysqli_query($conexion, "INSERT INTO zoo (nombre) VALUES ('$nombreZoo')");
    $zooId = mysqli_insert_id($conexion); // ID del zoo recién creado

    $cantidadAnimales = (int) $_POST['cantidadAnimales'];

    for ($i = 0; $i < $cantidadAnimales; $i++) {
        $nombreAnimal = $_POST['animal' . $i];
        
        // Comprobar si hay imagen
        if (isset($_FILES['imagen' . $i]) && $_FILES['imagen' . $i]['error'] === UPLOAD_ERR_OK) {
            $nombreArchivo = basename($_FILES['imagen' . $i]['name']);
            $rutaDestino = '../animales/' . time() . '_' . $nombreArchivo;

            // Mover archivo
            if (move_uploaded_file($_FILES['imagen' . $i]['tmp_name'], $rutaDestino)) {
                // Insertar animal con su imagen
                $stmt = "INSERT INTO animal (nombre, imagen, id_zoo) 
                         VALUES ('$nombreAnimal', '$rutaDestino', $zooId)";
                mysqli_query($conexion, $stmt);
            }
        }
    }

    echo "Zoológico y animales registrados correctamente.";
    var_dump($_POST);
   var_dump($_FILES);
}else{
    echo "Error al crear el zoo";
}
?>
