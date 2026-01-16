<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Coti Eventos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- ===================== HEADER ===================== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary px-4">
    <a class="navbar-brand fw-bold fst-italic" href="#">
        Coti Eventos<br>
        <small class="fw-light">Tu evento en un Click</small>
    </a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="menu">
        <ul class="navbar-nav gap-3">
            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Galería</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contáctanos</a></li>
            <li class="nav-item"><a class="nav-link fs-5" href="#">🛒</a></li>
            <li class="nav-item"><a class="nav-link fs-5" href="#">🤍</a></li>
        </ul>
    </div>
</nav>

<!-- ===================== CARRUSEL ===================== -->
<div id="carouselEventos" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button data-bs-target="#carouselEventos" data-bs-slide-to="0" class="active"></button>
        <button data-bs-target="#carouselEventos" data-bs-slide-to="1"></button>
        <button data-bs-target="#carouselEventos" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://littlemoments.es/wp-content/uploads/2018/09/littlemomentsalgetealta27.jpg"
                 class="d-block w-100"
                 style="height:300px; object-fit:cover;">
        </div>
        <div class="carousel-item">
            <img src="https://png.pngtree.com/thumb_back/fh260/background/20250121/pngtree-elegant-champagne-color-scheme-with-glittering-wall-for-event-setup-image_16886273.jpg"
                 class="d-block w-100"
                 style="height:300px; object-fit:cover;">
        </div>
        <div class="carousel-item">
            <img src="https://ingenieriademenu.com/wp-content/uploads/2025/05/Como-hacer-un-negocio-de-organizacion-de-eventos.jpg"
                 class="d-block w-100"
                 style="height:300px; object-fit:cover;">
        </div>
    </div>

    <button class="carousel-control-prev" data-bs-target="#carouselEventos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" data-bs-target="#carouselEventos" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- ===================== TITULO ===================== -->
<div class="container my-5 text-center">
    <span class="bg-secondary text-white px-5 py-2 rounded-pill fs-4 fw-bold shadow">
        Selecciona tu tipo de evento
    </span>
</div>

<!-- ===================== TARJETAS ===================== -->
<div class="container pb-5">
    <div class="row g-4 text-center">

        <div class="col-md-4">
            <img src="https://i.pinimg.com/736x/ae/7a/99/ae7a9937c10a15589fc458600af4fe34.jpg"
                 class="img-fluid rounded shadow-sm"
                 style="height:230px; object-fit:cover;">
            <button class="btn btn-secondary btn-lg w-100 mt-3 fw-bold shadow text-uppercase">
                Graduaciones
            </button>
        </div>

        <div class="col-md-4">
            <img src="https://shower.center/en/tips/baby-shower/quick-and-easy-baby-shower-decorating/carousel-1/3-blue-Elephant-baby-shower-decoration.webp"
                 class="img-fluid rounded shadow-sm"
                 style="height:230px; object-fit:cover;">
            <button class="btn btn-secondary btn-lg w-100 mt-3 fw-bold shadow text-uppercase">
                Baby Showers
            </button>
        </div>

        <div class="col-md-4">
            <img src="https://www.evento.love/blog/wp-content/uploads/2021/11/eventolove-wedding-bodas-tartaspersonalizadas-babyshower-cumplean%CC%83os-primercumplean%CC%83os-comunion-bautizo-scaled.jpg"
                 class="img-fluid rounded shadow-sm"
                 style="height:230px; object-fit:cover;">
            <button class="btn btn-secondary btn-lg w-100 mt-3 fw-bold shadow text-uppercase">
                Bautizos
            </button>
        </div>

        <div class="col-md-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8Noq6s1ZgGMg4ByW8izNok_qiuKMkTa0Rsw&s"
                 class="img-fluid rounded shadow-sm"
                 style="height:230px; object-fit:cover;">
            <button class="btn btn-secondary btn-lg w-100 mt-3 fw-bold shadow text-uppercase">
                Cumpleaños
            </button>
        </div>

        <div class="col-md-4">
            <img src="https://cdn0.bodas.net/article-vendor/45446/3_2/960/jpg/ec-228_1_45446-168966401847248.jpeg"
                 class="img-fluid rounded shadow-sm"
                 style="height:230px; object-fit:cover;">
            <button class="btn btn-secondary btn-lg w-100 mt-3 fw-bold shadow text-uppercase">
                Matrimonios
            </button>
        </div>

        <div class="col-md-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeA5axJdYAcGpbCCGTMXukL-0uxhOOjht9uw&s"
                 class="img-fluid rounded shadow-sm"
                 style="height:230px; object-fit:cover;">
            <button class="btn btn-secondary btn-lg w-100 mt-3 fw-bold shadow text-uppercase">
                XV Años
            </button>
        </div>

    </div>
</div>

<!-- ===================== FOOTER ===================== -->
<footer class="bg-secondary text-white text-center py-4">
    <p class="mb-1 fw-bold">CotiEventos · Organización de eventos San Luis</p>
    <small>© Copyright</small>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

