/* ============================================================
   JEROSDEV · Main JS
============================================================ */

/* ---------- MENÚ MÓVIL ---------- */
const burger     = document.getElementById('burger');
const mobileMenu = document.getElementById('mobileMenu');

if (burger && mobileMenu) {
    burger.addEventListener('click', () => {
        burger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
    });
}

/* ---------- REVEAL (animación de entrada) ---------- */
document.addEventListener('DOMContentLoaded', () => {
    const reveals = document.querySelectorAll('.reveal');
    reveals.forEach((el, i) => {
        setTimeout(() => el.classList.add('in'), 70 + i * 65);
    });
});

/* ---------- FORMULARIO · envío AJAX ---------- */
const form        = document.getElementById('contactForm');
const formFields  = document.getElementById('formFields');
const formSuccess = document.getElementById('formSuccess');

if (form && formFields && formSuccess) {
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const data = new FormData(form);

        try {
            const res = await fetch(form.action, {
                method: 'POST',
                body: data,
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });

            const json = await res.json();

            if (json.ok) {
                formFields.style.display = 'none';
                formSuccess.classList.add('show');
            } else {
                alert((json.errors || ['Error al enviar el mensaje.']).join('\n'));
            }
        } catch (err) {
            // Si el fetch falla, envío tradicional
            form.submit();
        }
    });
}