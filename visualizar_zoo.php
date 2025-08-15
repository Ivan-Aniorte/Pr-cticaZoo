<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona Zoológico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <header class="bg-primary text-white py-4 mb-4 shadow-sm">
        <div class="container text-center">
            <h1 class="fw-bold">Selecciona el Zoológico que deseas visitar</h1>
            <p class="mb-0">Explora nuestras opciones y vive una experiencia única</p>
        </div>
    </header>

    <main class="container">
        <div id="contenedorZoo" class="row g-4 justify-content-center">
            <?php include('src/mostrarZoo.php'); ?>
        </div>
                <div class="text-center mt-3">
            <a href="index.php" class="btn btn-secondary">Regresar al menú principal</a>
        </div>
    </main>

    <footer class="text-center py-4 mt-5 text-muted border-top">
        &copy; <?php echo date("Y"); ?> Zoológicos de tu ciudad
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
