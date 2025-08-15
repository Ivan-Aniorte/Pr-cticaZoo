<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Crea tu propio Zoológico!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-4">¡Bienvenido al panel de control para crear tu propio zoológico!</h1>
        <h2 class="text-center mb-5">Selecciona la opción que quieras realizar</h2>

        <div class="row g-4 justify-content-center">

            <!-- Carta Crear Zoo -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Crear Zoo</h5>
                        <p class="card-text">Agrega un nuevo zoológico al sistema con todos sus detalles.</p>
                        <a href="crear_zoo.php" class="btn btn-success">Crear</a>
                    </div>
                </div>
            </div>

            <!-- Carta Visualizar Zoos -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Visualizar Zoos</h5>
                        <p class="card-text">Consulta todos los zoológicos registrados.</p>
                        <a href="visualizar_zoo.php" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
