<?php

include('conexion.php');


$zooBBDD = "SELECT * FROM zoo";
$sqlZoo = mysqli_query($conexion, $zooBBDD);

while($zoo = mysqli_fetch_assoc($sqlZoo)){
    ?>
        <div class="col-md-4">
            <div class="card shadow-sm h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title"><?= $zoo['nombre'];  ?></h5>
                    <a href="ver_animales.php?id=<?=  $zoo['id'] ?>" class="btn btn-success">Visualizar</a>
                    <a href="src/delete.php?id=<?=  $zoo['id'] ?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>


    <?php
}
