<!DOCTYPE html>
<html lang="es">
<head>
    <?php view_partial('head', ['pageTitle' => $pageTitle ?? SITE_NAME]); ?>
</head>
<body>

<?php view_partial('nav',         ['activePage' => $activePage ?? '']); ?>
<?php view_partial('mobile-menu', ['activePage' => $activePage ?? '']); ?>

<main>
    <?= $content ?>
</main>

<?php view_partial('footer'); ?>

<script src="<?= url('public/js/main.js') ?>"></script>
</body>
</html>