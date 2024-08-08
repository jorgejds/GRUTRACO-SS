<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Agendar Pedido</h1>
    
    <form action="procesar_pedido.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <textarea class="form-control" id="direccion" name="direccion" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha del Pedido</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="form-group">
            <label for="hora">Hora del Pedido</label>
            <input type="time" class="form-control" id="hora" name="hora" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Pedido</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
