<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($usuario) && !empty($clave)) {
        // Aquí podrías validar contra una base de datos
        echo json_encode(["status" => "ok"]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "El usuario y la contraseña son obligatorios."
        ]);
    }
} else {
    http_response_code(405);
    echo json_encode([
        "status" => "error",
        "message" => "Método no permitido"
    ]);
}
