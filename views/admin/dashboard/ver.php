<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h4 class="fw-bold mb-0">Dashboard</h4>
        <p class="text-muted mb-0">Resumen general del sistema y accesos rápidos a los módulos.</p>
    </div>

    <!-- TARJETAS DE RESUMEN -->
    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white bg-primary h-100">
                <div class="card-body">
                    <h6 class="card-title">Usuarios Registrados</h6>
                    <h3 class="fw-bold">120</h3>
                    <p class="small mb-0"><i class="bi bi-person-fill"></i> Total de usuarios</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white bg-success h-100">
                <div class="card-body">
                    <h6 class="card-title">Eventos Programados</h6>
                    <h3 class="fw-bold">45</h3>
                    <p class="small mb-0"><i class="bi bi-calendar-event-fill"></i> Próximos eventos</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white bg-warning h-100">
                <div class="card-body">
                    <h6 class="card-title">Cotizaciones Pendientes</h6>
                    <h3 class="fw-bold">18</h3>
                    <p class="small mb-0"><i class="bi bi-file-text-fill"></i> Por revisar</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white bg-danger h-100">
                <div class="card-body">
                    <h6 class="card-title">Equipos Disponibles</h6>
                    <h3 class="fw-bold">32</h3>
                    <p class="small mb-0"><i class="bi bi-speaker-fill"></i> Total de equipos</p>
                </div>
            </div>
        </div>

    </div>

    <!-- ACCESOS RÁPIDOS -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <a href="index.php?module=usuarios&view=ver" class="card border-0 shadow-sm text-center text-dark text-decoration-none h-100">
                <div class="card-body">
                    <i class="bi bi-people-fill fs-1 mb-2"></i>
                    <h6 class="fw-bold">Usuarios</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="index.php?module=eventos&view=ver" class="card border-0 shadow-sm text-center text-dark text-decoration-none h-100">
                <div class="card-body">
                    <i class="bi bi-calendar-event fs-1 mb-2"></i>
                    <h6 class="fw-bold">Eventos</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="index.php?module=cotizaciones&view=ver" class="card border-0 shadow-sm text-center text-dark text-decoration-none h-100">
                <div class="card-body">
                    <i class="bi bi-file-earmark-text fs-1 mb-2"></i>
                    <h6 class="fw-bold">Cotizaciones</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="index.php?module=equipo_sonido&view=ver" class="card border-0 shadow-sm text-center text-dark text-decoration-none h-100">
                <div class="card-body">
                    <i class="bi bi-speaker fs-1 mb-2"></i>
                    <h6 class="fw-bold">Equipos de Sonido</h6>
                </div>
            </a>
        </div>
    </div>

    <!-- GRÁFICOS -->
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title mb-3">Eventos por Mes</h5>
                    <canvas id="chartEventosMes" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title mb-3">Cotizaciones por Estado</h5>
                    <canvas id="chartCotizaciones" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>
