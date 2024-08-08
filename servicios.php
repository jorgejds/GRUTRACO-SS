<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Pipas de Agua Pasher</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f0f4f8;
            color: #1b2e4b; /* Azul más oscuro para el texto */
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
            margin-left: 270px; /* Ajustar según el ancho de la sidebar */
            padding: 20px;
            width: calc(100% - 270px); /* Ajustar el ancho para evitar desbordamiento */
            flex: 1;
            overflow-x: hidden; /* Asegurar que no haya desbordamiento horizontal */
        }
        h1 {
            color: #0f1e3a; /* Azul aún más oscuro para el título */
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            position: relative;
        }
        h1::after {
            content: '';
            width: 60px;
            height: 3px;
            background-color: #0f1e3a; /* Línea decorativa debajo del título */
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .service-box {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .service-icon {
            background-color: #1b2e4b; /* Azul más oscuro para los iconos */
            color: white;
            border-radius: 50%;
            padding: 15px;
            font-size: 30px;
            margin-bottom: 15px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .service-box:hover .service-icon {
            background-color: #0f1e3a; /* Cambia a un azul más oscuro al pasar el ratón */
        }
        .service-box h3 {
            font-size: 1.25rem;
            margin-bottom: 15px;
            color: #0f1e3a; /* Azul más oscuro para los títulos de los servicios */
        }
        .service-box p {
            font-size: 1rem;
            color: #5a6b82; /* Texto en azul grisáceo */
        }
        .service-box a {
            color: #1b2e4b;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-top: 10px;
            transition: color 0.3s ease;
        }
        .service-box a:hover {
            color: #0f1e3a; /* Cambia a un azul más oscuro al pasar el ratón */
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="text-center mb-5">
            <img src="img/logoo.png" alt="Logo" class="img-fluid rounded-circle" width="85">
            <h3>Pipas de agua potable en Toluca</h3>
            <p>720 218 0466</p>
        </div>
        <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
        <a href="conocenos.php"><i class="fas fa-user"></i> Conócenos</a>
        <a href="pipas.php"><i class="fas fa-tint"></i> Pipas de agua</a>
        <a href="servicios.php"><i class="fas fa-concierge-bell"></i> Servicios</a>
        <a href="contacto.php"><i class="fas fa-envelope"></i> Contáctanos</a>
    </div>

    <div class="content">
        <div class="container mt-5">
            <h1>Servicios</h1>
            <p class="text-center">¡Somos PasHer!, servicio de agua potable en Toluca, Metepec, Almoloya de Juárez, Zinacantepec y alrededores. <br>¡Vamos a donde nos necesiten! <br>Distribución puntual de agua potable en pipas de diferente tamaño</p>
            
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Oficinas</h3>
                        <p>Compartir un espacio con varias personas en un ambiente que falte agua ¡es muy difícil!, ¡Sálvalos y llévales agua!</p>
                        <a href="contacto.php">Contáctanos</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-fill-drip"></i>
                        </div>
                        <h3>Llenado de Cisternas</h3>
                        <p>Contar con una cisterna te hace una persona ¡muy previsora! No te quedes sin agua y llámanos.</p>
                        <a href="contacto.php">Contáctanos</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h3>Agua para riego</h3>
                        <p>El agua para plantas de consumo y ornamentales es vital, no descuides aquello por lo que has trabajado. ¡Mándanos un whatsapp y acordamos tu entrega!</p>
                        <a href="contacto.php">Contáctanos</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <h3>Agua para la construcción</h3>
                        <p>Recuerda colocar en el presupuesto el agua al mejor precio. ¡Optimiza costos!, agua a un excelente precio.</p>
                        <a href="contacto.php">Contáctanos</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-swimmer"></i>
                        </div>
                        <h3>Hoteles y Albercas</h3>
                        <p>Estamos disponibles las 24 Hrs del día y los 365 días del año. ¡Somos tu apoyo para un mejor servicio!</p>
                        <a href="contacto.php">Contáctanos</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3>Uso Residencial</h3>
                        <p>Actualmente es constante que el agua llegue a faltar en algunas casas, pero no para ti. ¡Eres una persona organizada y previsora! ¡Llámanos!</p>
                        <a href="contacto.php">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </
