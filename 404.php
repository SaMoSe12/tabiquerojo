<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ups...</title>
    <link rel="shortcut icon" href="/assets/img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@700&family=Raleway:wght@300;500&display=swap" rel="stylesheet">
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</head>
<body>
    <?php require "./nav.php"?>
    <div class="container h-100">
        <div class="row">
            <div class="col offset-5">
                <div class="card text-white bg-warning p-2 m-3 align-middle" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Ups...</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Algo sali&oacute; mal.</h6>
                        <p class="card-text">Lo sentimos ese contenido no existe en nuestra pagina.</p>
                        <a href="./index.php" class="btn btn-info align-middle card-link">Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require "./footer.php" ?>
</body>
</html>

