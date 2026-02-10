<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Gestión de Tallas</h4>
            <p class="text-muted mb-0">Administra las tallas disponibles para cada género de vestuario.</p>
        </div>

        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevaTalla">
            <i class="bi bi-plus-circle"></i> Nueva Talla
        </a>
    </div>

    <!-- FILTROS -->
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar talla...">
                </div>
                <div class="col-md-4">
                    <select class="form-select">
                        <option value="">Filtrar por género</option>
                        <option>Dama</option>
                        <option>Caballero</option>
                        <option>Niños</option>
                        <option>Temático</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLA DE TALLAS -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Talla</th>
                            <th>Género</th>
                            <th>Descripción</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- TALLA 1 -->
                        <tr>
                            <td>1</td>
                            <td>S</td>
                            <td>Dama</td>
                            <td>Pequeña, ideal para mujeres jóvenes o adolescentes.</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarTalla">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                        <!-- TALLA 2 -->
                        <tr>
                            <td>2</td>
                            <td>M</td>
                            <td>Dama</td>
                            <td>Mediana, estándar para la mayoría de mujeres adultas.</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarTalla">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                        <!-- TALLA 3 -->
                        <tr>
                            <td>3</td>
                            <td>L</td>
                            <td>Caballero</td>
                            <td>Grande, adecuada para hombres adultos.</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarTalla">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODAL NUEVA TALLA -->
<div class="modal fade" id="modalNuevaTalla" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva Talla</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Talla</label>
                        <input type="text" name="talla" class="form-control" placeholder="Ej: S, M, L, XL" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Género</label>
                        <select name="genero" class="form-select" required>
                            <option value="">Seleccione género</option>
                            <option>Dama</option>
                            <option>Caballero</option>
                            <option>Niños</option>
                            <option>Temático</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Descripción</label>
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripción de la talla"></textarea>
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

<!-- MODAL EDITAR TALLA -->
<div class="modal fade" id="modalEditarTalla" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Talla</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Talla</label>
                        <input type="text" name="talla" class="form-control" value="S" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Género</label>
                        <select name="genero" class="form-select" required>
                            <option value="Dama" selected>Dama</option>
                            <option>Caballero</option>
                            <option>Niños</option>
                            <option>Temático</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Descripción</label>
                        <textarea name="descripcion" rows="2" class="form-control">Pequeña, ideal para mujeres jóvenes o adolescentes.</textarea>
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
