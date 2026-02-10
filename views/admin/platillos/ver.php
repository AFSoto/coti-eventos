<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Platillos Disponibles</h4>
            <p class="text-muted mb-0">Consulta y administra los platillos que pueden ser asignados a los eventos.</p>
        </div>

        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoPlatillo">
            <i class="bi bi-plus-circle"></i> Nuevo Platillo
        </a>
    </div>

    <!-- FILTROS -->
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar platillo...">
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Categoría</option>
                        <option>Entrada</option>
                        <option>Principal</option>
                        <option>Postre</option>
                        <option>Bebida</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Rango de precio</option>
                        <option>Hasta $20.000</option>
                        <option>$20.001 - $50.000</option>
                        <option>Más de $50.000</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- LISTADO DE PLATILLOS -->
    <div class="row g-4">

        <!-- PLATILLO 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://picsum.photos/600/400?10" class="card-img-top" alt="Platillo">
                <div class="card-body">
                    <h5 class="card-title mb-1">Ensalada César</h5>
                    <p class="text-muted small mb-2">Categoría: Entrada · Precio: $18.000</p>
                    <p class="small">
                        Mezcla de lechuga fresca, crutones, queso parmesano y aderezo César.
                    </p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                    <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                </div>
            </div>
        </div>

        <!-- PLATILLO 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://picsum.photos/600/400?11" class="card-img-top" alt="Platillo">
                <div class="card-body">
                    <h5 class="card-title mb-1">Filete de Salmón</h5>
                    <p class="text-muted small mb-2">Categoría: Principal · Precio: $45.000</p>
                    <p class="small">
                        Salmón a la plancha acompañado de vegetales al vapor y salsa de limón.
                    </p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                    <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                </div>
            </div>
        </div>

        <!-- PLATILLO 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://picsum.photos/600/400?12" class="card-img-top" alt="Platillo">
                <div class="card-body">
                    <h5 class="card-title mb-1">Brownie con Helado</h5>
                    <p class="text-muted small mb-2">Categoría: Postre · Precio: $12.000</p>
                    <p class="small">
                        Brownie caliente acompañado de helado de vainilla y salsa de chocolate.
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

<!-- MODAL NUEVO PLATILLO -->
<div class="modal fade" id="modalNuevoPlatillo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Platillo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nombre del platillo</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Categoría</label>
                            <select name="categoria" class="form-select" required>
                                <option value="">Seleccione</option>
                                <option>Entrada</option>
                                <option>Principal</option>
                                <option>Postre</option>
                                <option>Bebida</option>
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
                            <label class="form-label fw-semibold">Descripción</label>
                            <textarea name="descripcion" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Imagen del platillo</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>

                    </div>

                    <div class="mt-4 d-flex gap-2">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Guardar Platillo
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
