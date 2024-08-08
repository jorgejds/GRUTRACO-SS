<?php
session_start();
include 'config.php';

function loginUser($email, $password, $conn) {
    $sql = "SELECT id, password, role FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password, $role);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['role'] = $role;

            $stmt->close();
            header("Location: " . ($role == 'admin' ? "admin.php" : "index.php"));
            exit();
        }
    }

    $stmt->close();
    return "Credenciales incorrectas.";
}

function registerUser($nombre, $apellido, $email, $password, $conn) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $role = 'cliente';

    $sql = "INSERT INTO usuarios (nombre, apellido, email, password, role) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $apellido, $email, $hashed_password, $role);

    if ($stmt->execute()) {
        $stmt->close();
        return "Registro exitoso. Ahora puedes iniciar sesión.";
    } else {
        $stmt->close();
        return "Error al registrar. Intenta nuevamente.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $error = loginUser($email, $password, $conn);
    } elseif (isset($_POST['register'])) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $apellido = htmlspecialchars($_POST['apellido']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $success = registerUser($nombre, $apellido, $email, $password, $conn);
    }

    $conn->close();
}
?>

<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Iniciar Sesión / Registrarse</h1>
    <?php if (isset($error)) { echo '<div class="alert alert-danger">' . htmlspecialchars($error) . '</div>'; } ?>
    <?php if (isset($success)) { echo '<div class="alert alert-success">' . htmlspecialchars($success) . '</div>'; } ?>
    
    <div class="row">
        <div class="col-md-6">
            <h2>Iniciar Sesión</h2>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary">Iniciar Sesión</button>
                <a href="index.php" class="btn btn-secondary">Entrar sin registrar</a>
            </form>
        </div>
        
        <div class="col-md-6">
            <h2>Registrarse</h2>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" name="register" class="btn btn-success">Registrarse</button>
            </form>
        </d
