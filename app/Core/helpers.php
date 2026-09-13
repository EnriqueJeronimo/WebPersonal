<?php
declare(strict_types=1);

/**
 * Renderiza un módulo de vista con sus datos.
 * Ej: view_module('home/hero', ['title' => 'Hola']);
 */
function view_module(string $path, array $data = []): void
{
    $file = VIEWS . '/modules/' . $path . '.php';

    if (!is_file($file)) {
        throw new RuntimeException("Módulo no encontrado: $path");
    }

    extract($data, EXTR_SKIP);
    require $file;
}

/**
 * Renderiza un partial (nav, footer, head…).
 */
function view_partial(string $path, array $data = []): void
{
    $file = VIEWS . '/partials/' . $path . '.php';

    if (!is_file($file)) {
        throw new RuntimeException("Partial no encontrado: $path");
    }

    extract($data, EXTR_SKIP);
    require $file;
}

/**
 * Genera una URL absoluta relativa a BASE_URL.
 */
function url(string $path = ''): string
{
    return BASE_URL . '/' . ltrim($path, '/');
}

/**
 * Escapa HTML.
 */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Devuelve la clase "active" si la página coincide con la ruta dada.
 */
function is_active(string $route, string $activePage): string
{
    return $activePage === $route ? 'active' : '';
}