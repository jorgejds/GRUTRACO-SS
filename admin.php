<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

include 'config.php';

// Obtener todos los pedidos
$sql_pedidos = "SELECT * FROM pedidos";
$result_pedidos = $conn->query($sql_pedidos);

// Obtener todos los usuarios
$sql_usuarios = "SELECT * FROM usuarios";
$result_usuarios = $conn->query($sql_usuarios);

?>

<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Panel de Administración</h1>
    
    <h2>Pedidos</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Domicilio</th>
                <th>Teléfono</th>
                <th>Fecha de Entrega</th>
                <th>Tipo de Pipa</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result_pedidos->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellido']; ?></td>
                    <td><?php echo $row['domicilio']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['tipo_pipa']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
    <h2>Usuarios</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result_usuarios->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellido']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>
