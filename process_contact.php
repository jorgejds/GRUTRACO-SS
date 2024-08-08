<?php
// Incluir la conexión a la base de datos
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $mensaje = $conn->real_escape_string($_POST['message']);

    // Preparar la consulta SQL
    $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Verificar si la preparación de la consulta falló
    if ($stmt === false) {
        die('Error en la preparación de la consulta SQL: ' . $conn->error);
    }

    // Vincular los parámetros
    if (!$stmt->bind_param("sss", $nombre, $email, $mensaje)) {
        die('Error al vincular los parámetros: ' . $stmt->error);
    }

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al ejecutar la consulta: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
}

