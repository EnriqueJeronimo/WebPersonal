<?php
declare(strict_types=1);

class Project
{
    /**
     * Devuelve el listado de proyectos.
     * Actualmente estático — preparado para migrar a BD.
     */
    public static function all(): array
    {
        return [
            [
                'badge' => 'Landing Page',
                'code'  => '/01',
                'title' => 'Nova Fitness',
                'desc'  => 'Landing page para un gimnasio local con sistema de reserva de clases y formulario de captación de socios. Aumentó las inscripciones un 40% en tres meses.',
                'tags'  => ['HTML', 'CSS', 'JavaScript', 'Formspree'],
                'demo'  => '#',
                'repo'  => '#',
            ],
            [
                'badge' => 'E-commerce',
                'code'  => '/02',
                'title' => 'Mercado Andino',
                'desc'  => 'Tienda online de productos artesanales con catálogo filtrable, carrito persistente y checkout integrado. Gestión autónoma por parte del cliente.',
                'tags'  => ['React', 'Node.js', 'Stripe', 'MongoDB'],
                'demo'  => '#',
                'repo'  => '#',
            ],
            [
                'badge' => 'Web App',
                'code'  => '/03',
                'title' => 'FinTrack',
                'desc'  => 'Dashboard de control financiero personal con gráficas dinámicas, categorías personalizables y exportación de reportes en CSV.',
                'tags'  => ['React', 'Chart.js', 'API REST'],
                'demo'  => '#',
                'repo'  => '#',
            ],
            [
                'badge' => 'Corporativa',
                'code'  => '/04',
                'title' => 'Estudio Raíz',
                'desc'  => 'Sitio corporativo para un estudio de arquitectura. Galería de proyectos, blog integrado y optimización completa de imágenes y velocidad.',
                'tags'  => ['Next.js', 'Tailwind', 'SEO'],
                'demo'  => '#',
                'repo'  => '#',
            ],
            [
                'badge' => 'Herramienta',
                'code'  => '/05',
                'title' => 'DevBoard',
                'desc'  => 'Aplicación de gestión de tareas para equipos pequeños, con arrastrar y soltar, etiquetas y sincronización en tiempo real.',
                'tags'  => ['JavaScript', 'Socket.io', 'Node.js'],
                'demo'  => '#',
                'repo'  => '#',
            ],
            [
                'badge' => 'Menú Digital',
                'code'  => '/06',
                'title' => 'Café Aroma',
                'desc'  => 'Menú digital accesible por código QR, editable desde un panel sencillo. Redujo los costes de impresión del local a cero.',
                'tags'  => ['HTML', 'CSS', 'LocalStorage'],
                'demo'  => '#',
                'repo'  => '#',
            ],
        ];
    }
}