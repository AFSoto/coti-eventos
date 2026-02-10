<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Géneros de Vestuarios</h4>
            <p class="text-muted mb-0">Administra los géneros disponibles para los vestuarios.</p>
        </div>

        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoGenero">
            <i class="bi bi-plus-circle"></i> Nuevo Género
        </a>
    </div>

    <!-- FILTROS -->
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar género...">
                </div>
            </div>
        </div>
    </div>

    <!-- TABLA DE GÉNEROS -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Género</th>
                            <th>Descripción</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- GÉNERO 1 -->
                        <tr>
                            <td>1</td>
                            <td>Dama</td>
                            <td>Vestuario femenino para eventos y ceremonias.</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarGenero">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                        <!-- GÉNERO 2 -->
                        <tr>
                            <td>2</td>
                            <td>Caballero</td>
                            <td>Vestuario masculino para bodas, fiestas y eventos corporativos.</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarGenero">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                        <!-- GÉNERO 3 -->
                        <tr>
                            <td>3</td>
                            <td>Niños</td>
                            <td>Vestuario infantil para eventos familiares y temáticos.</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarGenero">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODAL NUEVO GÉNERO -->
<div class="modal fade" id="modalNuevoGenero" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Género</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nombre del género</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Descripción</label>
                        <textarea name="descripcion" rows="3" class="form-control"></textarea>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Guardar</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDITAR GÉNERO -->
<div class="modal fade" id="modalEditarGenero" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Género</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nombre del género</label>
                        <input type="text" name="nombre" class="form-control" value="Dama" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Descripción</label>
                        <textarea name="descripcion" rows="3" class="form-control">Vestuario femenino para eventos y ceremonias.</textarea>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Guardar Cambios</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
