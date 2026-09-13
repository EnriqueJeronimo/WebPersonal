<?php
declare(strict_types=1);

class ServicesController extends Controller
{
    public function index(): void
    {
        $services = [
            [
                'num'   => '01',
                'icon'  => 'monitor',
                'title' => 'Landing Pages',
                'desc'  => 'Páginas de aterrizaje enfocadas en conversión, con diseño limpio, carga rápida y estructura clara para captar clientes.',
            ],
            [
                'num'   => '02',
                'icon'  => 'cart',
                'title' => 'E-commerce',
                'desc'  => 'Tiendas online con catálogo, carrito y pasarela de pago. Configuradas para que puedas gestionarlas tú mismo sin depender de nadie.',
            ],
            [
                'num'   => '03',
                'icon'  => 'code',
                'title' => 'Aplicaciones Web',
                'desc'  => 'Paneles de administración, dashboards y herramientas internas a medida, con autenticación y base de datos incluida.',
            ],
            [
                'num'   => '04',
                'icon'  => 'bolt',
                'title' => 'Optimización',
                'desc'  => 'Mejoro la velocidad de carga, el SEO técnico y la accesibilidad de tu sitio actual. Menos peso, más rendimiento.',
            ],
            [
                'num'   => '05',
                'icon'  => 'folder',
                'title' => 'Integraciones & APIs',
                'desc'  => 'Conecto tu web con servicios externos: formularios, CRM, WhatsApp, pasarelas de pago o APIs propias.',
            ],
            [
                'num'   => '06',
                'icon'  => 'wrench',
                'title' => 'Mantenimiento',
                'desc'  => 'Actualizaciones, backups, corrección de errores y pequeños cambios mensuales para que tu web siga funcionando siempre.',
            ],
        ];

        $process = [
            ['num' => 'FASE 01', 'title' => 'Descubrimiento', 'desc' => 'Hablamos de tu negocio, tus objetivos y qué necesita realmente el proyecto.'],
            ['num' => 'FASE 02', 'title' => 'Diseño',         'desc' => 'Prototipo visual de la estructura y el estilo antes de escribir una línea de código.'],
            ['num' => 'FASE 03', 'title' => 'Desarrollo',     'desc' => 'Construcción del sitio con código limpio, responsive y optimizado.'],
            ['num' => 'FASE 04', 'title' => 'Entrega',        'desc' => 'Publicación, formación básica de uso y 30 días de soporte sin coste.'],
        ];

        $this->view('services', [
            'pageTitle'  => 'Servicios — JerosDev',
            'activePage' => 'servicios',
            'services'   => $services,
            'process'    => $process,
        ]);
    }
}