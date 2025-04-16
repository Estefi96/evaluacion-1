<?php global $response1, $response2;
require_once 'apiLoader.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <title>ConIngenio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" tabindex="0">
<header class="sticky-top">
    <nav class="navbar navbar-expand-md navbar-dark py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">ConIngenio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="nav nav-pills navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#servicios">Nuestros Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contacto">Contáctenos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <section id="home" class="text-center">
        <h1 class="text-center mb-5 display-5 fw-bold">¡Bienvenido!</h1>
        <p class="lead">
            Somos una empresa dedicada a impulsar la innovación digital en las organizaciones.
            Conoce nuestros servicios y descubre cómo podemos ayudarte a transformar tu negocio.
        </p>
    </section>

    <section id="servicios" class="bg-light py-5">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-center mb-5 display-5 fw-bold">Nuestros Servicios</h2>
            <?php if ($response1): ?>
                <div class="row justify-content-center">
                    <?php foreach ($response1["data"] as $data): ?>
                        <div class="col-sm-10 col-md-6 col-lg-4 mb-4 d-flex">
                            <div class="card w-100 shadow h-100">
                                <img src="./img/services.jpg" class="card-img-top" alt="Servicio">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-center"><?= htmlspecialchars($data['titulo']['esp']) ?></h5>
                                    <p class="card-text"><?= htmlspecialchars($data['descripcion']['esp']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-danger text-center">No se pudieron cargar los servicios.</p>
            <?php endif; ?>
        </div>
    </section>

    <section id="nosotros" class="bg-white py-5">
        <div class="container">
            <h2 class="text-center mb-5 display-5 fw-bold">Nosotros</h2>

            <?php if ($response2): ?>
                <div class="row justify-content-center">
                    <?php foreach ($response2["data"] as $data): ?>
                        <div class="col-md-10 col-lg-8 mb-4">
                            <div class="card border-0 shadow-md p-4">
                                <h4 class="card-title fw-semibold text-secondary border-start border-primary border-4 ps-3 mb-3">
                                    <?= htmlspecialchars($data['titulo']['esp']) ?>
                                </h4>
                                <p class="card-text lh-lg"><?= htmlspecialchars($data['descripcion']['esp']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-danger text-center">No se pudo cargar la información de la empresa.</p>
            <?php endif; ?>
        </div>
    </section>

    <section id="contacto" class="bg-light pt-5 pb-3">
        <div class="container">
            <h2 class="text-center mb-5 display-5 fw-bold">Contáctenos</h2>
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-6 mb-4">
                    <div class="p-4 rounded-4 bg-gradient shadow-lg">
                        <form method="POST" action="#">
                            <div class="mb-3">
                                <label class="form-label ">Nombre</label>
                                <input type="text" class="form-control border-primary" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control border-primary" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mensaje</label>
                                <textarea class="form-control border-primary" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary fw-semibold shadow-sm">Enviar</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 rounded-4 border-start border-primary border-4 shadow">
                        <h5 class="fw-bold mb-4">Información de Contacto</h5>
                        <p><strong>Dirección:</strong><br> Av. Providencia 1234, Oficina 601<br> Providencia, Santiago, Chile</p>
                        <p><strong>Teléfono:</strong><br> +56 2 1234 5678</p>
                        <p><strong>Correo:</strong><br> <a href="mailto:info@coningenio.cl" class="text-primary">info@coningenio.cl</a></p>
                        <p><strong>Web:</strong><br> <a href="https://www.coningenio.cl" class="text-primary" target="_blank">www.coningenio.cl</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="text-center py-4">
    <p>&copy; <?= date('Y') ?> ConIngenio. Todos los derechos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
