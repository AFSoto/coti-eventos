<!-- BOOTSTRAP CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="d-flex">

    <!-- SIDEBAR -->
    <aside class="d-flex flex-column p-3 border-end bg-light"
           style="width: 260px; min-height: 100vh;">

        <h5 class="text-center mb-4">CotiEventos Admin</h5>

        <ul class="nav nav-pills flex-column mb-auto">

            <!-- DASHBOARD -->
            <li class="nav-item">
                <a href="<?= BASE_URL ?>module=dashboard&view=ver" class="nav-link text-dark">🏠 Dashboard</a>
</li>
            

            <!-- USUARIOS -->
            <li class="nav-item">
                <a class="nav-link text-dark d-flex justify-content-between"
                   data-bs-toggle="collapse" data-bs-target="#menuUsuarios" href="#">
                    <span>👥 Usuarios</span><span>▾</span>
                </a>
                <div class="collapse" id="menuUsuarios">
                    <ul class="nav flex-column ms-3">
                        <li><a href="<?= BASE_URL ?>module=usuarios&view=listar" class="nav-link text-dark small">Listar usuarios</a></li>
                        <li><a href="<?= BASE_URL ?>module=usuarios&view=crear" class="nav-link text-dark small">Crear usuario</a></li>
                        <li><a href="<?= BASE_URL ?>module=usuarios&view=registro" class="nav-link text-dark small">usuarios registrados</a></li>
                        <li><a href="<?= BASE_URL ?>module=usuarios&view=asignar_rol" class="nav-link text-dark small">Asignar roles</a></li>
                    </ul>
                </div>
            </li>

            <!-- EVENTOS -->
            <li class="nav-item">
                <a class="nav-link text-dark d-flex justify-content-between"
                   data-bs-toggle="collapse" data-bs-target="#menuEventos" href="#">
                    <span>📅 Eventos</span><span>▾</span>
                </a>
                <div class="collapse" id="menuEventos">
                    <ul class="nav flex-column ms-3">
                        <li><a href="<?= BASE_URL ?>module=eventos&view=programados" class="nav-link text-dark small">Eventos programados</a></li>
                        <li><a href="<?= BASE_URL ?>module=eventos&view=calendario" class="nav-link text-dark small">Calendario</a></li>
                    </ul>
                </div>
            </li>

            <!-- COTIZACIONES -->
            <li class="nav-item">
                <a class="nav-link text-dark d-flex justify-content-between"
                   data-bs-toggle="collapse" data-bs-target="#menuCotizaciones" href="#">
                    <span>🧾 Cotizaciones</span><span>▾</span>
                </a>
                <div class="collapse" id="menuCotizaciones">
                    <ul class="nav flex-column ms-3">
                        <li><a href="<?= BASE_URL ?>module=cotizaciones&view=pendientes" class="nav-link text-dark small">Pendientes</a></li>
                        <li><a href="<?= BASE_URL ?>module=cotizaciones&view=aprobados" class="nav-link text-dark small">Aprobadas</a></li>
                        <li><a href="<?= BASE_URL ?>module=cotizaciones&view=rechazados" class="nav-link text-dark small">Rechazadas</a></li>
                        <li><a href="<?= BASE_URL ?>module=cotizaciones&view=completas" class="nav-link text-dark small">Completadas</a></li>
                    </ul>
                </div>
            </li>

            <!-- LUGARES -->
            <li class="nav-item">
                <a class="nav-link text-dark d-flex justify-content-between"
                   data-bs-toggle="collapse" data-bs-target="#menuLugares" href="#">
                    <span>🏛️ Lugares</span><span>▾</span>
                </a>
                <div class="collapse" id="menuLugares">
                    <ul class="nav flex-column ms-3">
                        <li><a href="<?= BASE_URL ?>module=lugares&view=ver" class="nav-link text-dark small">Ver lugares</a></li>
                        <li><a href="<?= BASE_URL ?>module=lugares&view=crear" class="nav-link text-dark small">Crear lugar</a></li>
                        <li><a href="<?= BASE_URL ?>module=lugares&view=disponibilidad" class="nav-link text-dark small">Disponibilidad</a></li>
                    </ul>
                </div>
            </li>

            <!-- VESTUARIOS -->
            <li class="nav-item">
                <a class="nav-link text-dark d-flex justify-content-between"
                   data-bs-toggle="collapse" data-bs-target="#menuVestuarios" href="#">
                    <span>👗 Vestuarios</span><span>▾</span>
                </a>
                <div class="collapse" id="menuVestuarios">
                    <ul class="nav flex-column ms-3">
                        <li><a href="<?= BASE_URL ?>module=vestuarios&view=gestion" class="nav-link text-dark small">Gestión</a></li>
                        <li><a href="<?= BASE_URL ?>module=vestuarios&view=stock" class="nav-link text-dark small">Stock</a></li>
                        <li><a href="<?= BASE_URL ?>module=vestuarios&view=generos" class="nav-link text-dark small">Géneros</a></li>
                        <li><a href="<?= BASE_URL ?>module=vestuarios&view=tallas" class="nav-link text-dark small">Tallas</a></li>
                    </ul>
                </div>
            </li>

            <!-- PLATILLOS -->
            <li class="nav-item">
                <a class="nav-link text-dark d-flex justify-content-between"
                   data-bs-toggle="collapse" data-bs-target="#menuplatillos" href="#">
                    <span>🍽️  platillos</span><span>▾</span>
                </a>
                <div class="collapse" id="menuplatillos">
                    <ul class="nav flex-column ms-3">
                        <li><a href="<?= BASE_URL ?>module=platillos&view=ver" class="nav-link text-dark small">ver platillos</a></li>
                        <li><a href="<?= BASE_URL ?>module=platillos&view=crear" class="nav-link text-dark small">crear platillos</a></li>
                    </ul>
                </div>
            </li>


            <!-- CÓCTELES -->
            <li class="nav-item">
                <a class="nav-link text-dark d-flex justify-content-between"
                   data-bs-toggle="collapse" data-bs-target="#menucocteles" href="#">
                    <span>🍹cocteles</span><span>▾</span>
                </a>
                <div class="collapse" id="menucocteles">
                    <ul class="nav flex-column ms-3">
                        <li><a href="<?= BASE_URL ?>module=cocteles&view=ver" class="nav-link text-dark small">ver cocteles</a></li>
                        <li><a href="<?= BASE_URL ?>module=cocteles&view=crear" class="nav-link text-dark small">crear cocteles</a></li>
                    </ul>
                </div>
            </li>

            <!-- SONIDO -->
            <li class="nav-item">
                <a class="nav-link text-dark d-flex justify-content-between"
                   data-bs-toggle="collapse" data-bs-target="#menusonido" href="#">
                    <span>🔊 sonido</span><span>▾</span>
                </a>
                <div class="collapse" id="menusonido">
                    <ul class="nav flex-column ms-3">
                        <li><a href="<?= BASE_URL ?>module=sonido&view=ver" class="nav-link text-dark small"> ver equipos de sonido</a></li>
                        <li><a href="<?= BASE_URL ?>module=sonido&view=crear" class="nav-link text-dark small"> crear equipos de sonido</a></li>
                        <li><a href="<?= BASE_URL ?>module=sonido&view=tipo" class="nav-link text-dark small">tipos de sonido</a></li>
                    </ul>
                </div>
            </li>

            <!-- REPORTES -->
            <li class="nav-item">
                <a href="<?= BASE_URL ?>module=reporte&view=ver" class="nav-link text-dark">📊 Reportes</a>
            </li>

            <!-- CONFIGURACIÓN -->
            <li class="nav-item">
                <a href="<?= BASE_URL ?>module=configuracion&view=ver" class="nav-link text-dark">⚙️ Configuración</a>
            </li>

        </ul>

        <hr>

        <div class="text-center small text-muted">
            © <?= date('Y') ?> CotiEventos
        </div>
    </aside>

    <!-- CONTENIDO -->
    <main class="flex-grow-1 p-4"></main>

</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

