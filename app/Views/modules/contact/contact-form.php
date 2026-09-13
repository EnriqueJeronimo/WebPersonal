<?php
$old     = $_SESSION['contact_old']    ?? [];
$errores = $_SESSION['contact_errors'] ?? [];
unset($_SESSION['contact_old'], $_SESSION['contact_errors']);
?>
<div class="reveal">
    <form class="form" id="contactForm" action="<?= url('contacto') ?>" method="POST" novalidate>

        <?php if (!empty($errores)): ?>
            <div style="background:#1a0a0a;border:1px solid #3a1a1a;color:#f88;padding:12px 16px;border-radius:10px;margin-bottom:20px;font-size:.85rem">
                <?php foreach ($errores as $err): ?>
                    <div>· <?= e($err) ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div id="formFields">
            <div class="field field--row">
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre"
                           placeholder="Tu nombre" required
                           value="<?= e($old['nombre'] ?? '') ?>">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email"
                           placeholder="tu@email.com" required
                           value="<?= e($old['email'] ?? '') ?>">
                </div>
            </div>

            <div class="field">
                <label for="tipo">Tipo de proyecto</label>
                <select id="tipo" name="tipo">
                    <option>Landing page</option>
                    <option>Sitio web corporativo</option>
                    <option>E-commerce</option>
                    <option>Aplicación web</option>
                    <option>Optimización / Mantenimiento</option>
                    <option>Otro</option>
                </select>
            </div>

            <div class="field">
                <label for="presupuesto">Presupuesto estimado</label>
                <select id="presupuesto" name="presupuesto">
                    <option>Menos de 500 €</option>
                    <option>500 € - 1.500 €</option>
                    <option>1.500 € - 3.000 €</option>
                    <option>Más de 3.000 €</option>
                    <option>Aún no lo sé</option>
                </select>
            </div>

            <div class="field">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje"
                          placeholder="Cuéntame brevemente qué necesitas, plazos y cualquier detalle relevante..."
                          required><?= e($old['mensaje'] ?? '') ?></textarea>
            </div>

            <button type="submit" class="btn btn--primary">
                Enviar mensaje
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </button>

            <p class="form__note">Respuesta en menos de 48h · Sin compromiso</p>
        </div>

        <div class="form__success" id="formSuccess">
            <svg width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/><path d="m8 12 3 3 5-6"/>
            </svg>
            <h3>¡Mensaje enviado!</h3>
            <p>Gracias por escribirme. Te responderé lo antes posible.</p>
        </div>
    </form>
</div>