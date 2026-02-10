<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Eventos Programados</h4>
            <p class="text-muted mb-0">Listado de eventos agendados en el sistema.</p>
        </div>

        <a href="#" class="btn btn-primary">
            <i class="bi bi-calendar-plus"></i> Nuevo Evento
        </a>
    </div>

    <!-- TARJETA -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <!-- FILTROS -->
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar evento...">
                </div>

                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Estado del evento</option>
                        <option>Programado</option>
                        <option>En proceso</option>
                        <option>Finalizado</option>
                        <option>Cancelado</option>
                    </select>
                </div>
            </div>

            <!-- TABLA -->
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Evento</th>
                            <th>Cliente</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Estado</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- EVENTO 1 -->
                        <tr>
                            <td>1</td>
                            <td>Boda de Ana y Luis</td>
                            <td>Ana Martínez</td>
                            <td>15/03/2026</td>
                            <td>6:00 PM</td>
                            <td>
                                <span class="badge bg-primary">Programado</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-info">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Cancelar</a>
                            </td>
                        </tr>

                        <!-- EVENTO 2 -->
                        <tr>
                            <td>2</td>
                            <td>Fiesta de 15 años</td>
                            <td>Laura Gómez</td>
                            <td>22/03/2026</td>
                            <td>7:30 PM</td>
                            <td>
                                <span class="badge bg-success">En proceso</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-info">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Cancelar</a>
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
