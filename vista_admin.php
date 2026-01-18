<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrador - CotiEventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- ===================== NAVBAR ===================== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary px-4">
    <a class="navbar-brand fw-bold" href="#">
        CotiEventos
        <small class="d-block fw-light fs-6">Tu evento en un Click</small>
    </a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Galería</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contáctanos</a></li>
        </ul>

        <button class="btn btn-light rounded-0">
            Cerrar sesión
        </button>
    </div>
</nav>

<!-- ===================== CONTENIDO ===================== -->
<div class="container-fluid">
    <div class="row">

        <!-- ===== SIDEBAR ===== -->
        <aside class="col-12 col-md-3 col-lg-2 bg-secondary bg-opacity-25 vh-100 p-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-transparent border-0">📄 Cotizaciones</li>
                <li class="list-group-item bg-transparent border-0">👤 Usuarios</li>
                <li class="list-group-item bg-transparent border-0">📅 Eventos agendados</li>
                <li class="list-group-item bg-transparent border-0">🛒 Productos / servicios</li>
                <li class="list-group-item bg-transparent border-0">📊 Reportes</li>
                <li class="list-group-item bg-transparent border-0">⚙️ Configuración</li>
            </ul>
        </aside>

        <!-- ===== CONTENIDO PRINCIPAL ===== -->
        <main class="col-12 col-md-9 col-lg-10 p-5 bg-white">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-normal">Administrador</h3>
                <button class="btn btn-secondary">
                    Nueva cotización
                </button>
            </div>

            <!-- TABLA -->
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead class="bg-secondary bg-opacity-25">
                        <tr>
                            <th>Usuario</th>
                            <th>Tipo de evento</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ana López</td>
                            <td>Matrimonio</td>
                            <td>11/06/2026</td>
                            <td>7:00 pm</td>
                            <td>Pendiente</td>
                            <td>—</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>

    </div>
</div>

<!-- ===================== FOOTER ===================== -->
<footer class="bg-secondary text-white py-3 mt-auto">
    <div class="container-fluid d-flex justify-content-between align-items-center px-4">
        <ul class="list-unstyled mb-0">
            <li>Inicio</li>
            <li>Servicios</li>
            <li>Galería</li>
            <li>Buffet</li>
            <li>Contáctanos</li>
        </ul>

        <small>
            Organización de eventos San Luis - Antioquia<br>
            copyright©
        </small>
    </div>
</footer>

</body>
</html>
