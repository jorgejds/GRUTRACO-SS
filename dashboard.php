<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include 'config.php';
include 'includes/header.php';

$user_id = $_SESSION['user_id'];
$user_type = $_SESSION['user_type'];

echo "<h2>Bienvenido, " . $_SESSION['user_name'] . "</h2>";

if ($user_type == 'cliente') {
    // Mostrar formulario para agendar citas
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fecha = $_POST['fecha'];
        $direccion = $_POST['direccion'];

        $sql = "INSERT INTO citas (user_id, fecha, direccion) VALUES ('$user_id', '$fecha', '$direccion')";

        if ($conn->query($sql) === TRUE) {
            echo "Cita agendada exitosamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <h3>Agendar Cita</h3>
    <form method="POST" action="">
        <input type="datetime-local" name="fecha" required>
        <input type="text" name="direccion" placeholder="Dirección" required>
        <button type="submit">Agendar</button>
    </form>

    <?php
} elseif ($user_type == 'admin') {
    // Mostrar citas y permitir manipulación
    $sql = "SELECT * FROM citas";
    $result = $conn->query($sql);

    echo "<h3>Citas Agendadas</h3>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Cita ID: " . $row['id'] . " - Usuario ID: " . $row['user_id'] . " - Fecha: " . $row['fecha'] . " - Dirección: " . $row['direccion'] . "</p>";
        }
    } else {
        echo "No hay citas agendadas";
    }
}

include 'includes/footer.php';
?>
