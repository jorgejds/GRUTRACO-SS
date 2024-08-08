<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos - Pipas de Agua Pasher</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            color: #1b3a57; /* Azul más oscuro para el texto */
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
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
            flex: 1;
            animation: fadeIn 1s ease-in-out;
        }
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
        }
        h1, h2 {
            margin-top: 30px;
            color: #0d2c4b; /* Un azul más oscuro */
            opacity: 0;
            animation: slideIn 1.2s ease-in-out forwards;
        }
        p.lead, ul {
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards;
            animation-delay: 0.5s;
            margin-bottom: 20px; /* Separación adicional entre textos */
        }
        ul {
            list-style-type: none;
            padding-left: 0;
            margin-top: 20px; /* Más espacio antes de la lista */
        }
        ul li {
            margin-bottom: 15px; /* Más separación entre elementos de la lista */
            padding-left: 25px;
            position: relative;
            font-size: 1.1em;
        }
        ul li::before {
            content: "\f00c"; /* Icono de FontAwesome */
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            color: #007bff;
            position: absolute;
            left: 0;
            top: 0;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes slideIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/sidebar.php'; ?>

    <div class="content">
        <div class="container mt-5">
            <h1>Conócenos</h1>
            <p class="lead">Somos una empresa dedicada al suministro de agua potable a través de pipas de agua. Ofrecemos un servicio rápido, confiable y de la más alta calidad para satisfacer las necesidades de nuestros clientes.</p>
            
            <h2>Nuestra Misión</h2>
            <p>Proveer agua potable de manera eficiente y confiable a nuestros clientes, garantizando siempre la calidad del agua y la puntualidad en nuestras entregas.</p>
            
            <h2>Nuestra Visión</h2>
            <p>Ser la empresa líder en el suministro de agua potable a través de pipas, reconocida por nuestro compromiso con la calidad, el servicio al cliente y la responsabilidad ambiental.</p>
            
            <h2>Nuestros Valores</h2>
            <ul>
                <li><strong>Calidad:</strong> Nos aseguramos de que el agua que suministramos cumpla con los más altos estándares de calidad.</li>
                <li><strong>Responsabilidad:</strong> Cumplimos con nuestros compromisos y siempre buscamos superar las expectativas de nuestros clientes.</li>
                <li><strong>Innovación:</strong> Utilizamos la tecnología y las mejores prácticas para mejorar continuamente nuestro servicio.</li>
                <li><strong>Sostenibilidad:</strong> Nos preocupamos por el medio ambiente y adoptamos prácticas que minimizan nuestro impacto ambiental.</li>
            </ul>
            
            <h2>Nuestro Equipo</h2>
            <p>Contamos con un equipo de profesionales altamente capacitados y comprometidos con la excelencia en el servicio. Nos esforzamos por mantener un ambiente de trabajo positivo y colaborativo.</p>
            
            <h2>Historia</h2>
            <p>Nuestra empresa fue fundada en 2010 con el objetivo de satisfacer la creciente demanda de agua potable en nuestra comunidad. Desde entonces, hemos crecido y expandido nuestros servicios para atender a una amplia variedad de clientes, incluyendo residencias, empresas y eventos especiales.</p>
            
            <h2>Contacto</h2>
            <p>Si deseas saber más sobre nuestros servicios o tienes alguna pregunta, no dudes en contactarnos:</p>
            <ul>
                <li><strong>Teléfono:</strong> 720 218 0466</li>
                <li><strong>Email:</strong> GRUTRACO@ofcicial55.com</li>
                <li><strong>Dirección:</strong> Calle Ficticia 123, Ciudad, </li>
            </ul>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
