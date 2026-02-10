<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Cócteles Disponibles</h4>
            <p class="text-muted mb-0">Consulta y administra los cócteles que pueden ofrecerse en los eventos.</p>
        </div>

        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoCoctel">
            <i class="bi bi-plus-circle"></i> Nuevo Cóctel
        </a>
    </div>

    <!-- FILTROS -->
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar cóctel...">
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Tipo</option>
                        <option>Alcohólico</option>
                        <option>Sin alcohol</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Rango de precio</option>
                        <option>Hasta $15.000</option>
                        <option>$15.001 - $30.000</option>
                        <option>Más de $30.000</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- LISTADO DE CÓCTELES -->
    <div class="row g-4">

        <!-- CÓCTEL 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://picsum.photos/600/400?20" class="card-img-top" alt="Cóctel">
                <div class="card-body">
                    <h5 class="card-title mb-1">Mojito</h5>
                    <p class="text-muted small mb-2">Tipo: Alcohólico · Precio: $20.000</p>
                    <p class="small">
                        Ron blanco, menta, azúcar, limón y soda. Refrescante y clásico.
                    </p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                    <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                </div>
            </div>
        </div>

        <!-- CÓCTEL 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://picsum.photos/600/400?21" class="card-img-top" alt="Cóctel">
                <div class="card-body">
                    <h5 class="card-title mb-1">Virgin Piña Colada</h5>
                    <p class="text-muted small mb-2">Tipo: Sin alcohol · Precio: $15.000</p>
                    <p class="small">
                        Piña, crema de coco y hielo, delicioso y refrescante para todos.
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

<!-- MODAL NUEVO CÓCTEL -->
<div class="modal fade" id="modalNuevoCoctel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Cóctel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nombre del cóctel</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ej: Mojito" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tipo</label>
                            <select name="tipo" class="form-select" required>
                                <option value="">Seleccione</option>
                                <option>Alcohólico</option>
                                <option>Sin alcohol</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Precio</label>
                            <input type="number" name="precio" class="form-control" min="0" required>
                        </div>

                        <div class="col-md-8">
                            <label class="form-label fw-semibold">Disponibilidad / Stock</label>
                            <input type="number" name="stock" class="form-control" min="0" value="10">
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Ingredientes</label>
                            <textarea name="ingredientes" rows="3" class="form-control" placeholder="Ej: Ron, menta, limón, azúcar, soda"></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Descripción</label>
                            <textarea name="descripcion" rows="3" class="form-control" placeholder="Descripción del cóctel"></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Imagen del cóctel</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>

                    </div>

                    <div class="mt-4 d-flex gap-2">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Guardar Cóctel
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
