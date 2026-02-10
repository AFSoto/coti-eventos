<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h4 class="fw-bold mb-0">Crear Nuevo Platillo</h4>
        <p class="text-muted mb-0">Ingresa los datos del platillo para que esté disponible en los eventos.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row g-3">

                    <!-- NOMBRE -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Nombre del platillo</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ej: Ensalada César" required>
                    </div>

                    <!-- CATEGORÍA -->
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

                    <!-- DISPONIBILIDAD -->
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Estado</label>
                        <select name="estado" class="form-select" required>
                            <option value="disponible">Disponible</option>
                            <option value="no_disponible">No Disponible</option>
                        </select>
                    </div>

                    <!-- DESCRIPCIÓN -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Descripción</label>
                        <textarea name="descripcion" rows="3" class="form-control" placeholder="Descripción del platillo"></textarea>
                    </div>

                    <!-- IMAGEN -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Imagen del platillo</label>
                        <input type="file" name="imagen" class="form-control">
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Guardar Platillo
                    </button>
                    <a href="index.php?module=platillos&view=ver" class="btn btn-outline-secondary">
                        Cancelar
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
