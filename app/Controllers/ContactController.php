<?php
declare(strict_types=1);

class ContactController extends Controller
{
    public function index(): void
    {
        $this->view('contact', [
            'pageTitle'  => 'Contacto — JerosDev',
            'activePage' => 'contacto',
        ]);
    }

    public function send(): void
    {
        // Recogida de datos
        $nombre      = trim((string) ($_POST['nombre']      ?? ''));
        $email       = trim((string) ($_POST['email']       ?? ''));
        $tipo        = trim((string) ($_POST['tipo']        ?? ''));
        $presupuesto = trim((string) ($_POST['presupuesto'] ?? ''));
        $mensaje     = trim((string) ($_POST['mensaje']     ?? ''));

        // Validación
        $errors = [];
        if ($nombre === '')                             $errors[] = 'El nombre es obligatorio.';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'El email no es válido.';
        if ($mensaje === '')                            $errors[] = 'El mensaje es obligatorio.';

        if (!empty($errors)) {
            if ($this->isAjax()) {
                $this->json(['ok' => false, 'errors' => $errors], 422);
            }

            $_SESSION['contact_errors'] = $errors;
            $_SESSION['contact_old']    = $_POST;
            header('Location: ' . url('contacto'));
            exit;
        }

        /* ============================================================
           PUNTO DE INTEGRACIÓN · Aquí enviarías el correo real.
           Opciones:
             - mail()  de PHP
             - PHPMailer / Symfony Mailer
             - Servicios externos: Formspree, Resend, EmailJS…
        ============================================================ */
        $to      = SITE_EMAIL;
        $subject = 'Nuevo contacto desde JerosDev';
        $body    = "Nombre:      $nombre\n"
                 . "Email:       $email\n"
                 . "Tipo:        $tipo\n"
                 . "Presupuesto: $presupuesto\n\n"
                 . "Mensaje:\n$mensaje\n";

        $headers = "From: no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'jerosdev.com') . "\r\n"
                 . "Reply-To: $email\r\n"
                 . "Content-Type: text/plain; charset=UTF-8\r\n";

        // Descomenta en producción:
        // @mail($to, $subject, $body, $headers);

        if ($this->isAjax()) {
            $this->json(['ok' => true, 'message' => 'Mensaje enviado correctamente.']);
        }

        header('Location: ' . url('contacto') . '?sent=1');
        exit;
    }
}