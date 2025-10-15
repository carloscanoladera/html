<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanitizar los datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));


    // Validar los datos (puedes agregar más validaciones según tus necesidades)
    if (empty($nombre) || empty($email)) {
        echo "<h3>Por favor, completa todos los campos.</h3>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Por favor, ingresa un correo electrónico válido.</h3>";
        exit;
    }

    echo "<h3>Gracias, $nombre. Tu mensaje ha sido recibido.</h3>";
}

?>