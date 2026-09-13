<section class="view" id="servicios">
    <div class="container section">

        <div class="section__head">
            <div class="eyebrow reveal">Servicios</div>
            <h2 class="section-title reveal">Lo que puedo hacer<br>por tu negocio.</h2>
            <p class="section-sub reveal">
                Trabajo con proyectos pequeños y medianos, con comunicación directa
                y entregas puntuales. Cada servicio se adapta a lo que realmente necesitas.
            </p>
        </div>

        <?php view_module('services/services-list', ['services' => $services]); ?>
        <?php view_module('services/process',       ['process'  => $process]);  ?>

        <div class="section__head reveal" style="margin-top:80px;margin-bottom:0">
            <a href="<?= url('contacto') ?>" class="btn btn--primary">
                Cuéntame tu proyecto
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>

    </div>
</section>