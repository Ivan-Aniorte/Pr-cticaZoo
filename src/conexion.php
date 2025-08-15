<?php

// Creamos la conexión
$conexion = mysqli_connect("localhost", "root", "", "zoo");

// Verificamos que se ha conectado correctamente a nuestra base de datos 'videoclub'
if (!$conexion) {
    echo "ERROR || NO SE PUDO CONECTAR A LA BASE DE DATOS";
    exit();
}