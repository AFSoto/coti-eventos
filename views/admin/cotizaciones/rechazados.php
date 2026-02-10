<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Cotizaciones Rechazadas</h4>
            <p class="text-muted mb-0">Solicitudes que no fueron aceptadas por el cliente.</p>
        </div>

        <a href="#" class="btn btn-outline-primary">
            <i class="bi bi-arrow-repeat"></i> Reintentar Cotización
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
                        <option value="">Motivo de rechazo</option>
                        <option>Precio alto</option>
                        <option>Fecha no disponible</option>
                        <option>Cancelación del evento</option>
                        <option>Otro</option>
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
                            <th>Fecha Rechazo</th>
                            <th>Monto Ofertado</th>
                            <th>Motivo</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- RECHAZADA 1 -->
                        <tr>
                            <td>1</td>
                            <td>Carolina Ruiz</td>
                            <td>Boda</td>
                            <td>18/03/2026</td>
                            <td>$4.000.000</td>
                            <td>
                                <span class="badge bg-danger">Precio alto</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Reenviar</a>
                            </td>
                        </tr>

                        <!-- RECHAZADA 2 -->
                        <tr>
                            <td>2</td>
                            <td>Daniel Torres</td>
                            <td>Evento corporativo</td>
                            <td>20/03/2026</td>
                            <td>$2.800.000</td>
                            <td>
                                <span class="badge bg-secondary">Fecha no disponible</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Reenviar</a>
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
