<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 — <?= SITE_NAME ?></title>
    <link rel="stylesheet" href="<?= url('public/css/style.css') ?>">
</head>
<body>
    <div class="container" style="min-height:100vh;display:grid;place-items:center;text-align:center">
        <div>
            <div class="eyebrow" style="justify-content:center">Error 404</div>
            <h1 class="section-title">Página no<br>encontrada.</h1>
            <p class="section-sub" style="margin:0 auto 32px">
                La ruta que buscas no existe o fue movida.
            </p>
            <a href="<?= url('/') ?>" class="btn btn--primary">Volver al inicio</a>
        </div>
    </div>
</body>
</html>