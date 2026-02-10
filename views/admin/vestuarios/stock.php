<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Stock de Vestuarios</h4>
            <p class="text-muted mb-0">Controla las cantidades disponibles y recibe alertas de bajo stock.</p>
        </div>

        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalActualizarStock">
            <i class="bi bi-pencil-square"></i> Actualizar Stock
        </a>
    </div>

    <!-- FILTROS -->
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar vestuario...">
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Tipo de vestuario</option>
                        <option>Dama</option>
                        <option>Caballero</option>
                        <option>Niños</option>
                        <option>Temático</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Talla</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLA STOCK -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Vestuarios</th>
                            <th>Tipo</th>
                            <th>Talla</th>
                            <th>Cantidad Total</th>
                            <th>Cantidad Disponible</th>
                            <th>Estado</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- VESTUARIO 1 -->
                        <tr>
                            <td>1</td>
                            <td>Vestido Gala - Dama</td>
                            <td>Dama</td>
                            <td>M</td>
                            <td>10</td>
                            <td>3</td>
                            <td>
                                <span class="badge bg-danger">Bajo stock</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalActualizarStock">Actualizar</a>
                            </td>
                        </tr>

                        <!-- VESTUARIO 2 -->
                        <tr>
                            <td>2</td>
                            <td>Traje Formal - Caballero</td>
                            <td>Caballero</td>
                            <td>L</td>
                            <td>8</td>
                            <td>5</td>
                            <td>
                                <span class="badge bg-success">Disponible</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalActualizarStock">Actualizar</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ACTUALIZAR STOCK -->
<div class="modal fade" id="modalActualizarStock" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Stock</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Vestuarios</label>
                        <input type="text" class="form-control" value="Vestido Gala - Dama" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Cantidad Total</label>
                        <input type="number" name="cantidad_total" class="form-control" min="0" value="10" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Cantidad Disponible</label>
                        <input type="number" name="cantidad_disponible" class="form-control" min="0" value="3" required>
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
