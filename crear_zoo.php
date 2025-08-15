<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu propio zoológico!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="module" src="src/formZooCrear.js" defer></script>
    <style>
        #contenedorAnimales, input{
            margin: 10px;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-4">Crea tu propio zoo</h1>

        <form method = "post" action="src/bbddCrearZoo.php" id ="formAnimal" class="card shadow p-4 bg-white" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombrezoo" class="form-label">Nombre del zoológico</label>
                <input type="text" class="form-control" name="nombrezoo" id="nombrezoo" placeholder="Ej: Zoo Safari">
            </div>

            <div class="mb-3">
                <label for="cantidadAnimales" class="form-label">¿Cuántos animales vas a querer?</label>
                <input type="number" class="form-control" name = "cantidadAnimales" id="cantidadAnimales" min="1" placeholder="Número de animales">
            </div>

            <!-- Contenedor donde se generarán los inputs -->
            <div id="contenedorAnimales" class="mb-3"></div>

            <button type="submit" class="btn btn-success w-100">Crear Zoo</button>
            <input type = "hidden" name= "animalesCantidadphp" value = "">
        </form>

        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-secondary">Regresar al menú principal</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
