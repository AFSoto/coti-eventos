<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Cotizaciones Pendientes</h4>
            <p class="text-muted mb-0">Solicitudes de cotización en espera de respuesta.</p>
        </div>

        <a href="#" class="btn btn-primary">
            <i class="bi bi-file-earmark-plus"></i> Nueva Cotización
        </a>
    </div>

    <!-- TARJETA -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <!-- FILTROS -->
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar cliente o evento...">
                </div>

                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Prioridad</option>
                        <option>Alta</option>
                        <option>Media</option>
                        <option>Baja</option>
                    </select>
                </div>
            </div>

            <!-- TABLA -->
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Evento</th>
                            <th>Fecha Solicitud</th>
                            <th>Presupuesto Estimado</th>
                            <th>Prioridad</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- COTIZACIÓN 1 -->
                        <tr>
                            <td>1</td>
                            <td>Ana Martínez</td>
                            <td>Boda</td>
                            <td>05/03/2026</td>
                            <td>$3.500.000</td>
                            <td>
                                <span class="badge bg-danger">Alta</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Responder</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Archivar</a>
                            </td>
                        </tr>

                        <!-- COTIZACIÓN 2 -->
                        <tr>
                            <td>2</td>
                            <td>Laura Gómez</td>
                            <td>Fiesta de 15 años</td>
                            <td>07/03/2026</td>
                            <td>$2.200.000</td>
                            <td>
                                <span class="badge bg-warning text-dark">Media</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Responder</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Archivar</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- PAGINACIÓN -->
            <nav class="mt-3">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link">Anterior</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">Siguiente</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>
