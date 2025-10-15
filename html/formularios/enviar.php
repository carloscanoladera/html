<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanitizar los datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));


    // Validar los datos (puedes agregar más validaciones según tus necesidades)
    if (empty($nombre) || empty($email)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, ingresa un correo electrónico válido.";
        exit;
    }

    echo "Gracias, $nombre. Tu mensaje ha sido recibido.";
}

?>