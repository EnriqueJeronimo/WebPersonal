<?php
declare(strict_types=1);

class Router
{
    /** @var array<string, array<string, string>> */
    private array $routes = [
        'GET'  => [],
        'POST' => [],
    ];

    public function get(string $path, string $handler): void
    {
        $this->routes['GET'][$path] = $handler;
    }

    public function post(string $path, string $handler): void
    {
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri    = $this->resolveUri();

        $handler = $this->routes[$method][$uri] ?? null;

        if ($handler === null) {
            $this->notFound();
            return;
        }

        [$class, $action] = explode('@', $handler);

        if (!class_exists($class)) {
            $this->serverError("Controlador no encontrado: $class");
            return;
        }

        $controller = new $class();

        if (!method_exists($controller, $action)) {
            $this->serverError("Acción no encontrada: $class@$action");
            return;
        }

        $controller->$action();
    }

    /**
     * Normaliza la URI entrante y elimina BASE_URL si procede.
     */
    private function resolveUri(): string
    {
        // Modo compatibilidad: index.php?route=/servicios
        if (isset($_GET['route'])) {
            return '/' . trim((string) $_GET['route'], '/');
        }

        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

        if (BASE_URL !== '' && str_starts_with($uri, BASE_URL)) {
            $uri = substr($uri, strlen(BASE_URL));
        }

        $uri = '/' . trim($uri, '/');

        return $uri === '//' ? '/' : $uri;
    }

    private function notFound(): void
    {
        http_response_code(404);

        $file = VIEWS . '/errors/404.php';

        if (is_file($file)) {
            require $file;
        } else {
            echo '404 · Página no encontrada';
        }
    }

    private function serverError(string $msg): void
    {
        http_response_code(500);
        echo '<pre style="background:#111;color:#f88;padding:20px">'
            . htmlspecialchars($msg)
            . '</pre>';
    }
}