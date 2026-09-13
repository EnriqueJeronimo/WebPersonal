<section class="view" id="proyectos">
    <div class="container section">

        <div class="section__head">
            <div class="eyebrow reveal">Portafolio</div>
            <h2 class="section-title reveal">Proyectos<br>recientes.</h2>
            <p class="section-sub reveal">
                Una selección de los trabajos que he desarrollado. Cada uno con sus
                propios retos, objetivos y soluciones.
            </p>
        </div>

        <?php view_module('projects/projects-grid', ['projects' => $projects]); ?>

        <div class="section__head reveal" style="margin-top:64px;margin-bottom:0">
            <p class="section-sub" style="margin-bottom:24px">
                ¿Tienes un proyecto en mente? Puedo ayudarte a hacerlo realidad.
            </p>
            <a href="<?= url('contacto') ?>" class="btn btn--primary">
                Trabajemos juntos
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>

    </div>
</section>