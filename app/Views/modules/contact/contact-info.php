<div class="reveal">
    <div class="contact-info__item">
        <div class="contact-info__label">Email</div>
        <a href="mailto:<?= SITE_EMAIL ?>" class="contact-info__value"><?= SITE_EMAIL ?></a>
    </div>

    <div class="contact-info__item">
        <div class="contact-info__label">WhatsApp</div>
        <a href="https://wa.me/<?= preg_replace('/\D/', '', SITE_WHATSAPP) ?>"
           target="_blank" rel="noopener" class="contact-info__value">
            <?= SITE_WHATSAPP ?>
        </a>
    </div>

    <div class="contact-info__item">
        <div class="contact-info__label">Ubicación</div>
        <div class="contact-info__value">Remoto · Disponible worldwide</div>
    </div>

    <div class="contact-info__item">
        <div class="contact-info__label">Disponibilidad</div>
        <div class="contact-info__value">Abierto a nuevos proyectos</div>
    </div>

    <div class="socials">
        <a href="#" class="social" aria-label="GitHub">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
        </a>
        <a href="#" class="social" aria-label="LinkedIn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6Z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        </a>
        <a href="#" class="social" aria-label="X">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l16 16M20 4L4 20"/></svg>
        </a>
        <a href="#" class="social" aria-label="Instagram">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".6" fill="currentColor"/></svg>
        </a>
    </div>
</div>