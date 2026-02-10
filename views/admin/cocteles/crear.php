<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h4 class="fw-bold mb-0">Crear Nuevo Cóctel</h4>
        <p class="text-muted mb-0">Ingresa los datos del cóctel para que esté disponible en los eventos.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row g-3">

                    <!-- NOMBRE -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Nombre del cóctel</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ej: Mojito" required>
                    </div>

                    <!-- TIPO -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Tipo</label>
                        <select name="tipo" class="form-select" required>
                            <option value="">Seleccione</option>
                            <option>Alcohólico</option>
                            <option>Sin alcohol</option>
                        </select>
                    </div>

                    <!-- PRECIO -->
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Precio</label>
                        <input type="number" name="precio" class="form-control" min="0" placeholder="Ej: 20000" required>
                    </div>

                    <!-- STOCK -->
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Cantidad disponible</label>
                        <input type="number" name="stock" class="form-control" min="0" value="10" required>
                    </div>

                    <!-- ESTADO -->
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Estado</label>
                        <select name="estado" class="form-select" required>
                            <option value="disponible">Disponible</option>
                            <option value="no_disponible">No Disponible</option>
                        </select>
                    </div>

                    <!-- INGREDIENTES -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Ingredientes</label>
                        <textarea name="ingredientes" rows="3" class="form-control" placeholder="Ej: Ron, menta, azúcar, limón, soda"></textarea>
                    </div>

                    <!-- DESCRIPCIÓN -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Descripción</label>
                        <textarea name="descripcion" rows="3" class="form-control" placeholder="Descripción del cóctel"></textarea>
                    </div>

                    <!-- IMAGEN -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Imagen del cóctel</label>
                        <input type="file" name="imagen" class="form-control">
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Guardar Cóctel
                    </button>
                    <a href="index.php?module=cocteles&view=ver" class="btn btn-outline-secondary">
                        Cancelar
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
