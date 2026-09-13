<?php
declare(strict_types=1);

/* ============================================================
   RUTAS DEL SISTEMA
============================================================ */
define('ROOT',        dirname(__DIR__));
define('APP',         ROOT . '/app');
define('VIEWS',       APP  . '/Views');
define('CONTROLLERS', APP  . '/Controllers');
define('MODELS',      APP  . '/Models');
define('PUBLIC_DIR',  ROOT . '/public');

/* ============================================================
   URL BASE
   Déjalo vacío si el proyecto está en la raíz del dominio.
   Ej: '/jerosdev' si vive en una subcarpeta.
============================================================ */
define('BASE_URL', '/PortafolioPersonal');

/* ============================================================
   DATOS DEL SITIO
============================================================ */
define('SITE_NAME',     'JerosDev');
define('SITE_EMAIL',    'hola@jerosdev.com');
define('SITE_WHATSAPP', '+00 000 000 000');

/* ============================================================
   ENTORNO
============================================================ */
define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    error_reporting(0);
}