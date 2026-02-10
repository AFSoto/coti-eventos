<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Calendario de Eventos</h4>
            <p class="text-muted mb-0">Visualiza los eventos programados por fecha.</p>
        </div>

        <a href="#" class="btn btn-primary">
            <i class="bi bi-calendar-plus"></i> Nuevo Evento
        </a>
    </div>

    <!-- TARJETA CALENDARIO -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <!-- NAVEGACIÓN DEL MES -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <h5 class="mb-0 fw-semibold">Marzo 2026</h5>

                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>

            <!-- DÍAS DE LA SEMANA -->
            <div class="row text-center fw-semibold border-bottom pb-2 mb-2">
                <div class="col">Lun</div>
                <div class="col">Mar</div>
                <div class="col">Mié</div>
                <div class="col">Jue</div>
                <div class="col">Vie</div>
                <div class="col">Sáb</div>
                <div class="col">Dom</div>
            </div>

            <!-- CUADRÍCULA DEL CALENDARIO -->
            <div class="row g-2 text-center">

                <!-- Día vacío -->
                <div class="col">
                    <div class="border rounded p-3 text-muted"> </div>
                </div>

                <!-- Día 1 -->
                <div class="col">
                    <div class="border rounded p-2 h-100">
                        <div class="fw-semibold">1</div>
                    </div>
                </div>

                <!-- Día con evento -->
                <div class="col">
                    <div class="border rounded p-2 h-100 bg-light">
                        <div class="fw-semibold">2</div>
                        <span class="badge bg-primary d-block mt-1">
                            Boda 6:00 PM
                        </span>
                    </div>
                </div>

                <!-- Día normal -->
                <div class="col">
                    <div class="border rounded p-2 h-100">
                        <div class="fw-semibold">3</div>
                    </div>
                </div>

                <!-- Puedes duplicar estas columnas hasta completar el mes -->
            </div>

        </div>
    </div>
</div>
