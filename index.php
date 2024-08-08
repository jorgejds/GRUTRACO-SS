<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Pipas de Agua</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @font-face {
            font-family: 'AntipastoPro';
            src: url('fonts/AntipastoPro_trial.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden; /* Ocultar desbordamiento horizontal */
            background-color: #f8f9fa; /* Color de fondo suave */
            color: #1b2e4b; /* Azul más oscuro para el texto */
            font-family: 'Helvetica Neue', Arial, sans-serif; /* Tipografía más formal */
        }

        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #1b2e4b; /* Azul más oscuro */
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto; /* Permite el desplazamiento vertical si el contenido es largo */
            animation: slideInLeft 0.5s ease;
            font-size: 1.1rem; /* Tamaño de fuente un poco más grande */
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 10px; /* Aumenta el padding para mayor espacio */
            transition: background 0.3s, transform 0.3s;
            font-size: 1.2rem; /* Tamaño de fuente más grande para los enlaces */
        }

        .sidebar a:hover {
            background-color: #495057;
            transform: translateX(10px); /* Pequeño desplazamiento al hacer hover */
        }

        .content {
            margin-left: 270px;
            padding: 30px; /* Aumenta el padding para mayor separación */
            width: calc(100% - 270px); /* Ajusta el ancho para evitar desbordamiento */
            flex: 1;
            animation: fadeIn 1s ease;
        }

        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px; /* Aumenta el padding para mayor comodidad */
            font-size: 1.1rem; /* Tamaño de fuente un poco más grande */
            margin-top: auto;
        }

        .hero {
            background-image: url('img/aguaanimada.gif'); /* Ruta a tu GIF en la carpeta img */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 420px; /* Ajusta la altura según tu preferencia */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 0;
            padding: 0;
            animation: fadeIn 2s forwards;
            position: relative;
            overflow: hidden;
        }

        .hero h1 {
            font-family: 'AntipastoPro', sans-serif;
            font-size: 4rem; /* Aumenta el tamaño de fuente para mayor impacto */
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            letter-spacing: 1.5px; /* Aumenta el espaciado entre letras */
        }

        h1, h2 {
            font-size: 2.5rem; /* Tamaño de fuente más grande para títulos */
            margin-bottom: 20px;
            color: #1b2e4b; /* Azul oscuro */
            font-weight: 700;
        }

        p {
            font-size: 1.2rem; /* Tamaño de fuente más grande para el texto */
            line-height: 1.6; /* Espaciado entre líneas */
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #1b2e4b;
            border-color: #1b2e4b;
            font-size: 1.2rem; /* Tamaño de fuente más grande para los botones */
            padding: 12px 24px; /* Aumenta el padding para mayor comodidad */
            border-radius: 5px; /* Bordes más suaves */
        }

        .btn-primary:hover {
            background-color: #1b2e4b;
            border-color: #1b2e4b;
        }

        .list-unstyled li i {
            margin-right: 25px; /* Espaciado más grande entre icono y texto */
            color: #1b2e4b;
        }

        .slide-in-left {
            opacity: 0;
            animation: slideInLeft 1.5s forwards;
            font-size: 1.8rem; /* Aumenta el tamaño de fuente */
        }

        .slide-in-right {
            opacity: 0;
            animation: slideInRight 1.5s forwards;
            font-size: 1.2rem; /* Aumenta el tamaño de fuente */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        .custom-row .img-fluid {
            margin-left: -50px; /* Ajusta el valor según sea necesario para mover la imagen más a la izquierda */
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center mb-5">
            <img src="img/logoo.png" alt="Logo" class="img-fluid rounded-circle" width="100">
            <h3>Pipas de agua potable en Toluca</h3>
            <p><a href="https://wa.me/7202180466" class="text-white">720 218 0466</a></p>
        </div>
        <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
        <a href="conocenos.php"><i class="fas fa-user"></i> Conócenos</a>
        <a href="pipas.php"><i class="fas fa-tint"></i> Pipas de agua</a>
        <a href="servicios.php"><i class="fas fa-concierge-bell"></i> Servicios</a>
        <a href="contacto.php"><i class="fas fa-envelope"></i> Contáctanos</a>
    </div>

    <div class="content">
        <div class="hero">
            <h1 style="color: #fdfefe;">BIENVENIDO A AGUA POTABLE EXPRESS GRUTRACO'S </h1>
        </div>
<h1></h1>
<h1></H1>
        <div class="container mt-8">
            <h1 class="text-center mb-4">Conócenos</h1>
            <p class="text-center slide-in-left">Ofrecemos servicio de agua potable con pipas. Contamos con <strong>más de 17 años de experiencia en el Valle de Toluca</strong>. Somos originarios del, Estado de México.</p>
            <div class="row custom-row">
                <div class="col-md-3">
                    <img src="img/pipa.png" class="img-fluid slide-in-left" alt="Camión de pipa de agua">
                </div>
                <div class="col-md-5">
    <h2 class="text-primary slide-in-right" style="font-size: 2rem; margin-bottom: 20px;">¿Te quedaste sin agua?</h2>
    <p class="slide-in-right" style="font-size: 1.1rem; line-height: 1.6;">¡No te preocupes! En <strong>Transportes de Agua Potable Express Grutraco's</strong> tenemos la experiencia y las pipas adecuadas para suplir tus necesidades de agua, tanto para empresas como para residencias.</p>
    <ul class="list-unstyled slide-in-right" style="font-size: 1.1rem; margin-top: 20px;">
        <li><i class="fas fa-truck"></i> <strong>Servicio:</strong> Operador calificado</li>
        <li><i class="fas fa-tint"></i> <strong>Capacidades:</strong> Desde 5 mil litros</li>
        <li><i class="fas fa-phone"></i> <strong>Teléfono:</strong> 720 218 0466</li>
        <li><i class="fas fa-building"></i> <strong>Distribución:</strong> Empresas, Residencias, Industrias</li>
        <li><i class="fas fa-calendar-alt"></i> <strong>Días:</strong> Lunes a Domingo</li>
        <li><i class="fas fa-clock"></i> <strong>Horario:</strong> 24 horas</li>
        <li><i class="fas fa-envelope"></i> <strong>Email:</strong> transpaguapotable@hotmail.com</li>
        <li><i class="fab fa-whatsapp"></i> <strong>WhatsApp:</strong> <a href="https://wa.me/7201940279" target="_blank">720 218 0466</a></li>
    </ul>
    <p class="slide-in-right" style="font-size: 1.1rem; line-height: 1.6; margin-top: 20px;">Entregamos agua potable de manera rápida y segura, adaptándonos a tus necesidades.</p>
    <a href="contacto.php" class="btn btn-primary btn-lg mt-4 slide-in-right" style="font-size: 1.2rem; padding: 10px 20px;">¡Contáctanos Ahora!</a>
</div>

