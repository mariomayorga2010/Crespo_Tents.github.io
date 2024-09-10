<?php
// Configuración del correo
$to = 'tu-correo@example.com'; // Cambia esto a tu dirección de correo
$subject = 'Nuevo mensaje del formulario';

// Recibir los datos del formulario
$name = isset($_POST['template-contactform-name']) ? trim($_POST['template-contactform-name']) : '';
$email = isset($_POST['template-contactform-email']) ? trim($_POST['template-contactform-email']) : '';
$phone = isset($_POST['template-contactform-phone']) ? trim($_POST['template-contactform-phone']) : '';
$subject = isset($_POST['template-contactform-subject']) ? trim($_POST['template-contactform-subject']) : '';
$message = isset($_POST['template-contactform-message']) ? trim($_POST['template-contactform-message']) : '';

// Validación básica
$errors = [];
if (empty($name)) {
    $errors[] = 'Name is required.';
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}
if (empty($message)) {
    $errors[] = 'Message is required.';
}

// Si hay errores, redirigir de nuevo al formulario
if (!empty($errors)) {
    header('Location: /path-to-your-form-page.php?errors=' . urlencode(implode(', ', $errors)));
    exit;
}

// Preparar el mensaje
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Subject: $subject\n";
$body .= "Message:\n$message\n";

// Enviar el correo
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
    header('Location: /path-to-your-form-page.php?success=1');
} else {
    header('Location: /path-to-your-form-page.php?error=1');
}
exit;
?>
