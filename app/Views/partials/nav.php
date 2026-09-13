<header class="nav">
    <div class="nav__inner">
        <a href="<?= url('/') ?>" class="logo">Jeros<span>Dev</span></a>

        <nav class="nav__links">
            <a href="<?= url('/') ?>"         class="<?= is_active('inicio',    $activePage) ?>">Inicio</a>
            <a href="<?= url('servicios') ?>" class="<?= is_active('servicios', $activePage) ?>">Servicios</a>
            <a href="<?= url('proyectos') ?>" class="<?= is_active('proyectos', $activePage) ?>">Proyectos</a>
            <a href="<?= url('contacto') ?>"  class="<?= is_active('contacto',  $activePage) ?>">Contacto</a>
        </nav>

        <a href="<?= url('contacto') ?>" class="btn btn--primary btn--sm nav__cta">
            Hablemos
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>

        <button class="burger" id="burger" aria-label="Menú">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>