<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h4 class="fw-bold mb-0">Crear Nuevo Lugar</h4>
        <p class="text-muted mb-0">Registra un espacio disponible para eventos.</p>
    </div>

    <!-- FORMULARIO -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="#" method="POST" enctype="multipart/form-data">

                <div class="row g-3">

                    <!-- NOMBRE -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Nombre del lugar</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <!-- TIPO -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Tipo de lugar</label>
                        <select name="tipo" class="form-select" required>
                            <option value="">Seleccione</option>
                            <option>Salón</option>
                            <option>Finca</option>
                            <option>Auditorio</option>
                            <option>Restaurante</option>
                        </select>
                    </div>

                    <!-- CAPACIDAD -->
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Capacidad</label>
                        <input type="number" name="capacidad" class="form-control" min="1" required>
                    </div>

                    <!-- CIUDAD -->
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" required>
                    </div>

                    <!-- PRECIO -->
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Precio base</label>
                        <input type="number" name="precio" class="form-control" min="0" required>
                    </div>

                    <!-- DESCRIPCIÓN -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Descripción</label>
                        <textarea name="descripcion" rows="3" class="form-control"></textarea>
                    </div>

                    <!-- IMAGEN -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Imagen del lugar</label>
                        <input type="file" name="imagen" class="form-control">
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Guardar Lugar
                    </button>

                    <a href="#" class="btn btn-outline-secondary">
                        Cancelar
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>
