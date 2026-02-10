<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Cotizaciones Completadas</h4>
            <p class="text-muted mb-0">Eventos realizados y finalizados con éxito.</p>
        </div>

        <a href="#" class="btn btn-outline-success">
            <i class="bi bi-graph-up"></i> Ver Reporte
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
                        <option value="">Tipo de evento</option>
                        <option>Boda</option>
                        <option>15 años</option>
                        <option>Cumpleaños</option>
                        <option>Corporativo</option>
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
                            <th>Fecha Evento</th>
                            <th>Monto Final</th>
                            <th>Estado</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- COMPLETADA 1 -->
                        <tr>
                            <td>1</td>
                            <td>Ana Martínez</td>
                            <td>Boda</td>
                            <td>15/03/2026</td>
                            <td>$3.500.000</td>
                            <td>
                                <span class="badge bg-success">Finalizado</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver Detalle</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Descargar PDF</a>
                            </td>
                        </tr>

                        <!-- COMPLETADA 2 -->
                        <tr>
                            <td>2</td>
                            <td>Laura Gómez</td>
                            <td>Fiesta de 15 años</td>
                            <td>22/03/2026</td>
                            <td>$2.200.000</td>
                            <td>
                                <span class="badge bg-success">Finalizado</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver Detalle</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Descargar PDF</a>
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
