<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Tipos de Equipo de Sonido</h4>
            <p class="text-muted mb-0">Gestiona los tipos de equipo disponibles para eventos.</p>
        </div>

        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoTipo">
            <i class="bi bi-plus-circle"></i> Nuevo Tipo
        </a>
    </div>

    <!-- TABLA DE TIPOS -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nombre del Tipo</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- TIPO 1 -->
                        <tr>
                            <td>1</td>
                            <td>Parlante</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarTipo">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                        <!-- TIPO 2 -->
                        <tr>
                            <td>2</td>
                            <td>Micrófono</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarTipo">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                        <!-- TIPO 3 -->
                        <tr>
                            <td>3</td>
                            <td>Consola</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarTipo">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                        <!-- TIPO 4 -->
                        <tr>
                            <td>4</td>
                            <td>Luces</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarTipo">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODAL NUEVO TIPO -->
<div class="modal fade" id="modalNuevoTipo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Tipo de Equipo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nombre del Tipo</label>
                        <input type="text" name="nombre_tipo" class="form-control" placeholder="Ej: Parlante" required>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Guardar
                        </button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDITAR TIPO -->
<div class="modal fade" id="modalEditarTipo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Tipo de Equipo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nombre del Tipo</label>
                        <input type="text" name="nombre_tipo" class="form-control" value="Parlante" required>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Actualizar
                        </button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

