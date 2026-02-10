<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h4 class="fw-bold mb-0">Reportes del Sistema</h4>
        <p class="text-muted mb-0">Visualiza estadísticas y genera reportes detallados sobre el sistema.</p>
    </div>

    <!-- TARJETAS DE RESUMEN -->
    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white bg-primary h-100">
                <div class="card-body">
                    <h6 class="card-title">Usuarios Registrados</h6>
                    <h3 class="fw-bold">120</h3>
                    <p class="small mb-0"><i class="bi bi-person-fill"></i> Total de usuarios activos</p>
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
                    <p class="small mb-0"><i class="bi bi-file-text-fill"></i> Cotizaciones por revisar</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white bg-danger h-100">
                <div class="card-body">
                    <h6 class="card-title">Platillos / Cócteles</h6>
                    <h3 class="fw-bold">65</h3>
                    <p class="small mb-0"><i class="bi bi-basket-fill"></i> Items disponibles</p>
                </div>
            </div>
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

    <!-- BOTONES DE EXPORTACIÓN -->
    <div class="mt-4 d-flex gap-2">
        <button class="btn btn-outline-primary"><i class="bi bi-file-earmark-spreadsheet"></i> Exportar Excel</button>
        <button class="btn btn-outline-danger"><i class="bi bi-file-pdf"></i> Exportar PDF</button>
        <button class="btn btn-outline-secondary"><i class="bi bi-printer"></i> Imprimir</button>
    </div>

</div>
