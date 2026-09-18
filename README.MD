# JerosDev · Portafolio Freelance

> Sitio web de marca personal para **JerosDev**, desarrollador web freelance.
> Construido en PHP puro bajo el patrón **Modelo-Vista-Controlador (MVC)**, con
> diseño monocromático (negro/blanco) y estética tecnológica minimalista.

![Estado](https://img.shields.io/badge/estado-producción-000000?style=flat-square)
![PHP](https://img.shields.io/badge/PHP-8.1%2B-000000?style=flat-square)
![Licencia](https://img.shields.io/badge/licencia-MIT-000000?style=flat-square)
![Arquitectura](https://img.shields.io/badge/arquitectura-MVC-000000?style=flat-square)

---

## 📑 Tabla de contenidos

1. [Descripción general](#-descripción-general)
2. [Objetivo del proyecto](#-objetivo-del-proyecto)
3. [Características principales](#-características-principales)
4. [Stack tecnológico](#-stack-tecnológico)
5. [Arquitectura MVC](#-arquitectura-mvc)
6. [Estructura de archivos](#-estructura-de-archivos)
7. [Requisitos previos](#-requisitos-previos)
8. [Instalación](#-instalación)
9. [Configuración](#-configuración)
10. [Rutas disponibles](#-rutas-disponibles)
11. [Descripción de módulos](#-descripción-de-módulos)
12. [Componentes del Core](#-componentes-del-core)
13. [Controladores](#-controladores)
14. [Modelos](#-modelos)
15. [Vistas y módulos](#-vistas-y-módulos)
16. [Sistema de diseño](#-sistema-de-diseño)
17. [Formulario de contacto](#-formulario-de-contacto)
18. [Solución de problemas](#-solución-de-problemas)
19. [Buenas prácticas aplicadas](#-buenas-prácticas-aplicadas)
20. [Roadmap](#-roadmap)
21. [Licencia](#-licencia)
22. [Autor](#-autor)

---

## 🎯 Descripción general

**JerosDev** es un sitio web de marca personal diseñado para **captar clientes
freelance** y **mostrar proyectos realizados**. Está construido desde cero en PHP
sin frameworks, aplicando un patrón MVC limpio que separa responsabilidades y
facilita el mantenimiento y la escalabilidad.

El sitio funciona como una **aplicación de una sola página por ruta** (cada sección
tiene su propia URL y controlador), sin dependencia de bases de datos — los datos
de proyectos y servicios viven en el modelo `Project` y en los controladores, listos
para migrar a una BD cuando el proyecto lo requiera.

### Filosofía del diseño

- **Monocromático**: solo negro y blanco, con matices en escala de grises.
- **Tecnológico pero sobrio**: sin colores llamativos, tipografía técnica (`JetBrains Mono`) combinada con `Inter`.
- **Foco en contenido**: el diseño no compite con la información.
- **Rendimiento**: cero dependencias JS externas, sin frameworks CSS.

---

## 🎯 Objetivo del proyecto

| Objetivo | Descripción |
|----------|-------------|
| **Captar clientes** | Comunicar claramente los servicios ofrecidos y facilitar el contacto. |
| **Mostrar trabajo** | Presentar los proyectos realizados con sus tecnologías y enlaces. |
| **Transmitir confianza** | Diseño profesional, mensaje directo, tiempos de respuesta visibles. |
| **Conversión** | Cada vista conduce al usuario hacia el formulario de contacto. |

---

## ✨ Características principales

- ✅ **Arquitectura MVC** pura sin frameworks (Router + Controller + View + Model).
- ✅ **Front Controller único** (`index.php`) que centraliza todas las peticiones.
- ✅ **Autoload** simple de clases por convención de directorios.
- ✅ **Motor de vistas** con soporte para layouts, partials y módulos reutilizables.
- ✅ **Sistema de módulos** independientes (`hero`, `stats`, `marquee`, `services-list`, `process`, `projects-grid`, `project-card`, `contact-info`, `contact-form`).
- ✅ **Router** con soporte para URLs limpias (`.htaccess`) y modo compatibilidad (`?route=`).
- ✅ **Formulario de contacto** con validación server-side + envío AJAX con fallback tradicional.
- ✅ **Diseño responsive** (mobile-first, breakpoints en 1024px / 860px / 640px).
- ✅ **404 personalizada** integrada al diseño.
- ✅ **Sin dependencias npm/composer** — solo PHP puro y 3 archivos estáticos.
- ✅ **CSS con variables** para facilitar el theming.
- ✅ **Accesible** con etiquetas semánticas, `aria-label`, contraste correcto.

---

## 🛠 Stack tecnológico

| Capa | Tecnología |
|------|-----------|
| **Backend** | PHP 8.1+ (strict types, arrow functions, match) |
| **Frontend** | HTML5 semántico, CSS3 moderno (variables, grid, backdrop-filter) |
| **JS** | Vanilla ES6+ (fetch, async/await, classList) |
| **Fuentes** | Inter + JetBrains Mono (Google Fonts) |
| **Servidor** | Apache con `mod_rewrite` · Nginx · PHP built-in server |
| **Sin dependencias** | No usa Composer, npm, ni frameworks externos |

---

## 🏗 Arquitectura MVC

### Flujo de una petición
Usuario
│
▼
index.php ──► Router::dispatch()
│ │
│ ▼
│ Resuelve ruta → "Controller@action"
│ │
│ ▼
│ Controller::action()
│ │
│ ┌────────┴────────┐
│ ▼ ▼
│ Model View::render()
│ (Project::all) │
│ │ │
│ └────────┬────────┘
│ ▼
│ layouts/main.php
│ ┌──────┼──────┐
│ ▼ ▼ ▼
│ partials $content partials
│ (head) (vista) (footer)
│ │
│ ▼
│ modules/*.php
│ │
▼ ▼
Respuesta HTML renderizada

text

### Capas

| Capa | Responsabilidad | Ubicación |
|------|-----------------|-----------|
| **Front Controller** | Recibir todas las peticiones y arrancar la app | `index.php` |
| **Router** | Mapear URL + método → controlador@acción | `app/Core/Router.php` |
| **Controller** | Orquestar: pedir datos al modelo y pasarlos a la vista | `app/Controllers/` |
| **Model** | Gestionar datos (hoy estáticos, mañana BD) | `app/Models/` |
| **View** | Renderizar HTML con layouts + partials + módulos | `app/Views/` |
| **Helpers** | Utilidades globales (URLs, escape, render de módulos) | `app/Core/helpers.php` |

---

## 📁 Estructura de archivos
jerosdev/
│
├── index.php # Front Controller · entrada única
├── .htaccess # Reglas de reescritura (Apache)
├── router.php # Router para php -S (dev)
├── README.md # Este archivo
│
├── config/
│ └── config.php # Constantes y configuración global
│
├── app/
│ │
│ ├── Core/ # Núcleo del framework
│ │ ├── Router.php # Enrutador HTTP
│ │ ├── Controller.php # Controlador base (abstract)
│ │ ├── View.php # Motor de vistas
│ │ └── helpers.php # Funciones globales
│ │
│ ├── Controllers/ # Controladores (uno por vista)
│ │ ├── HomeController.php
│ │ ├── ServicesController.php
│ │ ├── ProjectsController.php
│ │ └── ContactController.php
│ │
│ ├── Models/ # Modelos de datos
│ │ └── Project.php
│ │
│ └── Views/ # Capa de presentación
│ │
│ ├── layouts/
│ │ └── main.php # Layout principal
│ │
│ ├── partials/ # Fragmentos globales
│ │ ├── head.php # <head> con CSS y fuentes
│ │ ├── nav.php # Barra de navegación superior
│ │ ├── mobile-menu.php # Menú hamburguesa móvil
│ │ └── footer.php # Pie de página
│ │
│ ├── modules/ # Módulos reutilizables por vista
│ │ ├── home/
│ │ │ ├── hero.php # Hero con título + CTAs
│ │ │ ├── stats.php # Cuadro de estadísticas
│ │ │ └── marquee.php # Cinta infinita de tecnologías
│ │ ├── services/
│ │ │ ├── services-list.php # Grid de 6 servicios
│ │ │ └── process.php # 4 fases de trabajo
│ │ ├── projects/
│ │ │ ├── projects-grid.php # Wrapper del grid
│ │ │ └── project-card.php # Tarjeta individual
│ │ └── contact/
│ │ ├── contact-info.php # Datos de contacto + redes
│ │ └── contact-form.php # Formulario funcional
│ │
│ ├── errors/
│ │ └── 404.php # Página no encontrada
│ │
│ ├── home.php # Vista: Home
│ ├── services.php # Vista: Servicios
│ ├── projects.php # Vista: Proyectos
│ └── contact.php # Vista: Contacto
│
└── public/ # Recursos estáticos públicos
├── css/
│ └── style.css # Hoja de estilos global
└── js/
└── main.js # Menú móvil + reveal + AJAX

text

---

## ⚙️ Requisitos previos

- **PHP >= 8.1** (usa `declare(strict_types=1)`, `match`, arrow functions).
- **Apache** con `mod_rewrite` habilitado **o** Nginx **o** servidor embebido de PHP.
- **Navegador moderno** (Chrome, Firefox, Safari, Edge actualizados).
- Opcional: **Composer** (no usado actualmente, pero preparado para añadirse).

Verifica tu versión de PHP:

```bash
php -v