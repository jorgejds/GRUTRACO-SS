<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - Pipas de Agua</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
            background-color: #f8f9fa;
            color: #1b2e4b;
        }

        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #1b2e4b;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            animation: slideInLeft 0.5s ease;
            font-size: 1.1rem;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 10px;
            transition: background 0.3s, transform 0.3s;
            font-size: 1.2rem;
        }

        .sidebar a:hover {
            background-color: #495057;
            transform: translateX(10px);
        }
        
        .content {
            margin-left: 270px;
            padding: 20px;
            width: calc(100% - 270px);
            flex: 1;
            animation: fadeIn 1s ease;
        }

        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto;
            animation: slideInUp 0.5s ease;
        }

        h1, h2 {
            opacity: 0;
            animation: fadeIn 1s ease forwards;
            animation-delay: 0.3s;
        }

        h2 {
            margin-top: 30px;
        }

        .form-group, #map {
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
            animation-delay: 0.5s;
        }

        .btn-primary, .btn-whatsapp {
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #1b2e4b;
            border-color: #1b2e4b;
        }

        .btn-primary:hover {
            background-color: #163a63;
            transform: translateY(-3px);
        }

        .btn-whatsapp {
            background-color: #25d366;
            color: white;
            border: none;
        }

        .btn-whatsapp:hover {
            background-color: #1eb843;
            transform: translateY(-3px);
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInLeft {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }

        @keyframes slideInUp {
            from { transform: translateY(100%); }
            to { transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center mb-5">
            <img src="img/logoo.png" alt="Logo" class="img-fluid rounded-circle" width="100">
            <h3>Pipas de Agua Potable</h3>
            <p><a href="https://wa.me/7202180466" class="text-white">720 218 0466</a></p>
        </div>
        <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
        <a href="conocenos.php"><i class="fas fa-user"></i> Conócenos</a>
        <a href="pipas.php"><i class="fas fa-tint"></i> Pipas de Agua</a>
        <a href="servicios.php"><i class="fas fa-concierge-bell"></i> Servicios</a>
        <a href="contacto.php"><i class="fas fa-envelope"></i> Contáctanos</a>
    </div>

    <div class="content">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Contáctanos</h1>
            <div class="row">
                <div class="col-md-6">
                    <h2>Agenda tu Pedido</h2>
                    <form id="pedidoForm" action="procesar_pedido.php" method="POST" onsubmit="enviarWhatsApp(); return false;">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escribe tu apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="domicilio">Domicilio</label>
                            <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Escribe tu dirección" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Escribe tu número de teléfono" required pattern="[0-9]{10}">
                            <small class="form-text text-muted">Debe contener 10 dígitos.</small>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha de Entrega</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>
                        <div class="form-group">
                            <label for="tipo_pipa">Tipo de Pipa</label>
                            <select class="form-control" id="tipo_pipa" name="tipo_pipa" required>
                                <option value="pequena">Pequeña</option>
                                <option value="mediana">Mediana</option>
                                <option value="grande">Grande</option>
                            </select>
                        </div>
                        <div class="form-group d-flex">
                            <button type="submit" class="btn btn-primary">Agendar Pedido</button>
                            <a href="#" id="btnWhatsApp" class="btn btn-whatsapp" onclick="enviarWhatsApp()">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2>Nuestra Ubicación</h2>
                    <div id="map" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Pipas de Agua. Todos los derechos reservados.</p>
    </div>

    <!-- Incluir script de Google Maps con tu API Key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAi1DRM8NUZIkuXFljme-PTsGYjeedR2Lw&callback=initMap" async defer></script>
    <script>
        function initMap() {
            var location = {lat: 19.2826, lng: -99.6557}; // Coordenadas de Toluca, Estado de México
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }

        function enviarWhatsApp() {
            var nombre = document.getElementById('nombre').value;
            var apellido = document.getElementById('apellido').value;
            var domicilio = document.getElementById('domicilio').value;
            var telefono = document.getElementById('telefono').value;
            var fecha = document.getElementById('fecha').value;
            var tipoPipa = document.getElementById('tipo_pipa').value;

            var mensaje = "Hola, me gustaría agendar un pedido.\n" +
                "Nombre: " + nombre + " " + apellido + "\n" +
                "Domicilio: " + domicilio + "\n" +
                "Teléfono: " + telefono + "\n" +
                "Fecha de Entrega: " + fecha + "\n" +
                "Tipo de Pipa: " + tipoPipa;

            var url = "https://wa.me/7202180466?text=" + encodeURIComponent(mensaje);
            window.open(url, '_blank');
        }

        // Validar que la fecha seleccionada no sea una fecha pasada
        document.getElementById('fecha').setAttribute('min', new Date().toISOString().split('T')[0]);
    </script>
</body>
</html>

