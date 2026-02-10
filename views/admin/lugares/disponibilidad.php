<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Disponibilidad del Lugar</h4>
            <p class="text-muted mb-0">Consulta y gestiona las fechas disponibles para eventos.</p>
        </div>

        <a href="#" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Bloquear Fecha
        </a>
    </div>

    <!-- INFO DEL LUGAR -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <h5 class="fw-semibold mb-1">Salón Primavera</h5>
            <p class="text-muted mb-0">Capacidad: 120 personas · Ciudad: Bogotá</p>
        </div>
    </div>

    <!-- CALENDARIO SIMPLE -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <!-- NAVEGACIÓN MES -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <h5 class="mb-0 fw-semibold">Marzo 2026</h5>

                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>

            <!-- DÍAS SEMANA -->
            <div class="row text-center fw-semibold border-bottom pb-2 mb-2">
                <div class="col">Lun</div>
                <div class="col">Mar</div>
                <div class="col">Mié</div>
                <div class="col">Jue</div>
                <div class="col">Vie</div>
                <div class="col">Sáb</div>
                <div class="col">Dom</div>
            </div>

            <!-- CUADRÍCULA -->
            <div class="row g-2 text-center">

                <!-- DÍA LIBRE -->
                <div class="col">
                    <div class="border rounded p-3 bg-light">
                        <div class="fw-semibold">5</div>
                        <span class="badge bg-success">Libre</span>
                    </div>
                </div>

                <!-- DÍA OCUPADO -->
                <div class="col">
                    <div class="border rounded p-3 bg-light">
                        <div class="fw-semibold">6</div>
                        <span class="badge bg-danger">Ocupado</span>
                    </div>
                </div>

                <!-- DÍA BLOQUEADO -->
                <div class="col">
                    <div class="border rounded p-3 bg-light">
                        <div class="fw-semibold">7</div>
                        <span class="badge bg-secondary">Bloqueado</span>
                    </div>
                </div>

                <!-- Duplica columnas según días del mes -->

            </div>

        </div>
    </div>
</div>
