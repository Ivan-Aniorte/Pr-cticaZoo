<?php

include('conexion.php');

$id_zoo = $_GET['id'];

$delete = "DELETE FROM animal WHERE id_zoo = $id_zoo";
$sqlDelete = mysqli_query($conexion, $delete);


if($sqlDelete){
    $deleteZoo = "DELETE FROM zoo WHERE id = $id_zoo";
    $sqlDeleteZoo = mysqli_query($conexion, $deleteZoo);
    header('Location: ../index.php');
}