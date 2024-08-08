<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Pipas - Pipas de Agua</title>
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
            padding: 30px;
            width: calc(100% - 270px);
            flex: 1;
        }

        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        h1.page-title {
            text-align: center;
            margin-top: 20px;
            font-size: 2.5rem;
            font-weight: bold;
            color: #0f1e3a;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        h1.section-title {
            text-align: center;
            margin-bottom: 30px;
            color: #0f1e3a;
        }

        .gallery-container {
            padding: 15px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .gallery-item {
            position: relative;
            width: calc(25% - 20px); /* Ajusta el tamaño y espacio entre imágenes */
            margin-bottom: 20px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease;
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra ligera */
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease, opacity 0.3s ease;
            border-radius: 15px; /* Bordes redondeados para las imágenes */
        }

        .gallery-item:hover img {
            transform: scale(1.1);
            opacity: 0.9;
        }

        .gallery-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 15px; /* Asegurar que la superposición también tenga bordes redondeados */
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .gallery-item .overlay i {
            color: white;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center mb-5">
            <img src="img/logoo.png" alt="Logo" class="img-fluid rounded-circle" width="100">
            <h3>Pipas de agua potable en Toluca</h3>
            <p><a href="https://wa.me/720 218 0466" class="text-white">720 218 0466</a></p>
        </div>
        <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
        <a href="conocenos.php"><i class="fas fa-user"></i> Conócenos</a>
        <a href="pipas.php"><i class="fas fa-tint"></i> Pipas de agua</a>
        <a href="servicios.php"><i class="fas fa-concierge-bell"></i> Servicios</a>
        <a href="contacto.php"><i class="fas fa-envelope"></i> Contáctanos</a>
    </div>

    <div class="content">
        <h1 class="page-title">Galería de Pipas</h1>
        <h1 class="section-title">Grandes</h1>
        <div class="gallery-container">
            <div class="gallery-item">
                <a href="https://wa.me/720 218 0466" target="_blank">
                    <img src="img/Todas1.jpeg" alt="Pipa">
                    <div class="overlay">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="https://wa.me/720 218 0466" target="_blank">
                    <img src="img/Todas2.jpeg" alt="Pipa">
                    <div class="overlay">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="https://wa.me/720 218 0466" target="_blank">
                    <img src="img/Todas3.jpeg" alt="Pipa">
                    <div class="overlay">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </div>
        </div>

        <h1 class="section-title">Medianas</h1>
        <div class="gallery-container">
            <div class="gallery-item">
                <a href="https://wa.me/" target="_blank">
                    <img src="img/Grande1.jpeg" alt="Pipa">
                    <div class="overlay">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="https://wa.me/720 218 0466" target="_blank">
                    <img src="img/grande2.jpeg" alt="Pipa">
                    <div class="overlay">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="https://wa.me/720 218 0466" target="_blank">
                    <img src="img/Grande3.jpeg" alt="Pipa">
                    <div class="overlay">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </div>
        </div>

        <h1 class="section-title">Pequeñas</h1>
        <div class="gallery-container">
            <div class="gallery-item">
                <a href="https://wa.me/720 218 0466" target="_blank">
                    <img src="img/Mediana1.jpeg" alt="Pipa">
                    <div class="overlay">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="https://wa.me/720 218 0466" target="_blank">
                    <img src="img/Mediana2.jpeg" alt="Pipa">
                    <div class="overlay">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="https://wa.me/720 218 0466" target="_blank">
                    <img src="img/Mediana3.jpeg" alt="Pipa">
                    <div class="overlay">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

   
