<div class="mobile-menu" id="mobileMenu">
    <a href="<?= url('/') ?>"         class="<?= is_active('inicio',    $activePage) ?>">Inicio</a>
    <a href="<?= url('servicios') ?>" class="<?= is_active('servicios', $activePage) ?>">Servicios</a>
    <a href="<?= url('proyectos') ?>" class="<?= is_active('proyectos', $activePage) ?>">Proyectos</a>
    <a href="<?= url('contacto') ?>"  class="<?= is_active('contacto',  $activePage) ?>">Contacto</a>
</div>