<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Equipos de Sonido</h4>
            <p class="text-muted mb-0">Consulta y administra los equipos de sonido disponibles para eventos.</p>
        </div>

        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoEquipo">
            <i class="bi bi-plus-circle"></i> Nuevo Equipo
        </a>
    </div>

    <!-- FILTROS -->
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar equipo...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Tipo de equipo</option>
                        <option>Parlante</option>
                        <option>Micrófono</option>
                        <option>Consola</option>
                        <option>Luces</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Disponibilidad</option>
                        <option>Disponible</option>
                        <option>No disponible</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLA DE EQUIPOS -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Capacidad / Potencia</th>
                            <th>Precio Alquiler</th>
                            <th>Disponibilidad</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- EQUIPO 1 -->
                        <tr>
                            <td>1</td>
                            <td>Parlante JBL 1000W</td>
                            <td>Parlante</td>
                            <td>1000W RMS</td>
                            <td>$200.000</td>
                            <td><span class="badge bg-success">Disponible</span></td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarEquipo">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                        <!-- EQUIPO 2 -->
                        <tr>
                            <td>2</td>
                            <td>Consola Behringer X32</td>
                            <td>Consola</td>
                            <td>32 canales</td>
                            <td>$350.000</td>
                            <td><span class="badge bg-danger">No disponible</span></td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarEquipo">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                        <!-- EQUIPO 3 -->
                        <tr>
                            <td>3</td>
                            <td>Micrófono Shure SM58</td>
                            <td>Micrófono</td>
                            <td>N/A</td>
                            <td>$50.000</td>
                            <td><span class="badge bg-success">Disponible</span></td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEditarEquipo">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODAL NUEVO EQUIPO -->
<div class="modal fade" id="modalNuevoEquipo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Equipo de Sonido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nombre del equipo</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ej: Parlante JBL 1000W" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tipo</label>
                            <select name="tipo" class="form-select" required>
                                <option value="">Seleccione</option>
                                <option>Parlante</option>
                                <option>Micrófono</option>
                                <option>Consola</option>
                                <option>Luces</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Capacidad / Potencia</label>
                            <input type="text" name="capacidad" class="form-control" placeholder="Ej: 1000W RMS / 32 canales">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Precio de alquiler</label>
                            <input type="number" name="precio" class="form-control" min="0" placeholder="Ej: 200000" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Disponibilidad</label>
                            <select name="estado" class="form-select" required>
                                <option value="disponible">Disponible</option>
                                <option value="no_disponible">No disponible</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Descripción</label>
                            <textarea name="descripcion" rows="3" class="form-control" placeholder="Descripción del equipo"></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Imagen del equipo</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>

                    </div>

                    <div class="mt-4 d-flex gap-2">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Guardar Equipo
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