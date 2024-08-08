<?php
include 'config.php';
include 'includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $domicilio = $_POST['domicilio'];
    $role = 'cliente';  // Por defecto, todos los nuevos usuarios son clientes

    $sql = "INSERT INTO users (nombre, apellidos, email, password, domicilio, role) VALUES ('$nombre', '$apellidos', '$email', '$password', '$domicilio', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success">Registro exitoso</div>';
        header("Location: login.php");
    } else {
        echo '<div class="alert alert-danger">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }
}
?>

<div class="container">
    <h2>Registrarse</h2>
    <form method="POST" action="" class="form-group">
        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
        <input type="text" name="domicilio" class="form-control" placeholder="Domicilio" required>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>

