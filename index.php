<?php
/**
 * JerosDev · Front Controller
 * Todas las peticiones pasan por aquí.
 */

declare(strict_types=1);

session_start();

require_once __DIR__ . '/config/config.php';

// Autoload simple de clases del Core, Controllers y Models
spl_autoload_register(function (string $class): void {
    $paths = [
        APP . '/Core/'        . $class . '.php',
        APP . '/Controllers/' . $class . '.php',
        APP . '/Models/'      . $class . '.php',
    ];
    foreach ($paths as $file) {
        if (is_file($file)) {
            require_once $file;
            return;
        }
    }
});

// Helpers globales
require_once APP . '/Core/helpers.php';

// ---- Definición de rutas ----
$router = new Router();

$router->get('/',          'HomeController@index');
$router->get('/servicios', 'ServicesController@index');
$router->get('/proyectos', 'ProjectsController@index');
$router->get('/contacto',  'ContactController@index');
$router->post('/contacto', 'ContactController@send');

$router->dispatch();