<?php
declare(strict_types=1);

class View
{
    /**
     * Renderiza una vista + layout.
     */
    public static function render(string $view, array $data = [], string $layout = 'main'): void
    {
        $viewFile = VIEWS . '/' . $view . '.php';

        if (!is_file($viewFile)) {
            throw new RuntimeException("Vista no encontrada: $view");
        }

        // Extrae $data como variables locales
        extract($data, EXTR_SKIP);

        // Captura el HTML de la vista
        ob_start();
        require $viewFile;
        $content = ob_get_clean();

        // Carga el layout con $content disponible
        $layoutFile = VIEWS . '/layouts/' . $layout . '.php';

        if (!is_file($layoutFile)) {
            throw new RuntimeException("Layout no encontrado: $layout");
        }

        require $layoutFile;
    }
}