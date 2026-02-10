<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Gestión de Vestuarios</h4>
            <p class="text-muted mb-0">Administra los vestuarios disponibles para los eventos.</p>
        </div>

        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoVestuarios">
            <i class="bi bi-plus-circle"></i> Nuevo Vestuario
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

    <!-- LISTADO DE VESTUARIOS -->
    <div class="row g-4">

        <!-- VESTUARIO 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://picsum.photos/600/400?4" class="card-img-top" alt="Vestuario">
                <div class="card-body">
                    <h5 class="card-title mb-1">Vestido de Gala - Dama</h5>
                    <p class="text-muted small mb-2">Talla: M</p>
                    <p class="small">
                        Elegante vestido para ceremonias formales y eventos especiales.
                    </p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                    <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                </div>
            </div>
        </div>

        <!-- VESTUARIO 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://picsum.photos/600/400?5" class="card-img-top" alt="Vestuario">
                <div class="card-body">
                    <h5 class="card-title mb-1">Traje Formal - Caballero</h5>
                    <p class="text-muted small mb-2">Talla: L</p>
                    <p class="small">
                        Traje elegante ideal para bodas, quinceaños y eventos corporativos.
                    </p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                    <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- MODAL NUEVO VESTUARIO -->
<div class="modal fade" id="modalNuevoVestuarios" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Vestuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nombre del vestuario</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tipo</label>
                            <select name="tipo" class="form-select" required>
                                <option value="">Seleccione</option>
                                <option>Dama</option>
                                <option>Caballero</option>
                                <option>Niños</option>
                                <option>Temático</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Talla</label>
                            <select name="talla" class="form-select" required>
                                <option value="">Seleccione</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control" min="1" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Precio Alquiler</label>
                            <input type="number" name="precio" class="form-control" min="0" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Descripción</label>
                            <textarea name="descripcion" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Imagen del vestuario</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>

                    </div>

                    <div class="mt-4 d-flex gap-2">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Guardar Vestuario
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
