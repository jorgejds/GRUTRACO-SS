<?php
include 'config.php'; // Asegúrate de que 'config.php' tiene la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $domicilio = htmlspecialchars($_POST['domicilio']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $fecha = htmlspecialchars($_POST['fecha']);
    $tipo_pipa = htmlspecialchars($_POST['tipo_pipa']);

    // Validación del lado del servidor
    if (empty($nombre) || empty($apellido) || empty($domicilio) || empty($telefono) || empty($fecha) || empty($tipo_pipa)) {
        echo "Todos los campos son obligatorios.";
    } else {
        // Preparar la consulta SQL
        $sql = "INSERT INTO pedidos (nombre, apellido, domicilio, telefono, fecha, tipo_pipa) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Verificar si la preparación de la consulta falló
        if ($stmt === false) {
            die('Error en la preparación de la consulta SQL: ' . $conn->error . " Consulta: " . $sql);
        }

        // Vincular los parámetros
        if (!$stmt->bind_param("ssssss", $nombre, $apellido, $domicilio, $telefono, $fecha, $tipo_pipa)) {
            die('Error al vincular los parámetros: ' . $stmt->error);
        }

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Redireccionamiento después de la ejecución exitosa del formulario
            header("Location: confirmacion.php");
            exit();
        } else {
            echo htmlspecialchars("Error al ejecutar la consulta: " . $stmt->error);
        }

        // Cerrar la declaración y la conexión
        $stmt->close();
        $conn->close();
    }
}
