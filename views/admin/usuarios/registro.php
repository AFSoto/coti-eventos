<!-- CONTENEDOR PRINCIPAL -->
<div class="container-fluid py-4">

    <!-- TÍTULO Y BOTÓN -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">Usuarios Registrados</h4>
        <a href="#" class="btn btn-primary">
            <i class="bi bi-person-plus"></i> Nuevo Usuario
        </a>
    </div>

    <!-- TARJETA -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <!-- BUSCADOR -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar usuario...">
                </div>
            </div>

            <!-- TABLA -->
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- FILA DE EJEMPLO -->
                        <tr>
                            <td>1</td>
                            <td>María Gómez</td>
                            <td>maria@gmail.com</td>
                            <td><span class="badge bg-primary">Administrador</span></td>
                            <td><span class="badge bg-success">Activo</span></td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-info">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Juan Pérez</td>
                            <td>juan@gmail.com</td>
                            <td><span class="badge bg-secondary">Cliente</span></td>
                            <td><span class="badge bg-danger">Inactivo</span></td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-info">Ver</a>
                                <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
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
