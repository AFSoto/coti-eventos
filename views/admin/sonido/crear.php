<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h4 class="fw-bold mb-0">Crear Nuevo Equipo de Sonido</h4>
        <p class="text-muted mb-0">Ingresa los datos del equipo para que esté disponible en los eventos.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row g-3">

                    <!-- NOMBRE -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Nombre del equipo</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ej: Parlante JBL 1000W" required>
                    </div>

                    <!-- TIPO -->
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

                    <!-- CAPACIDAD / POTENCIA -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Capacidad / Potencia</label>
                        <input type="text" name="capacidad" class="form-control" placeholder="Ej: 1000W RMS / 32 canales">
                    </div>

                    <!-- PRECIO DE ALQUILER -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Precio de alquiler</label>
                        <input type="number" name="precio" class="form-control" min="0" placeholder="Ej: 200000" required>
                    </div>

                    <!-- DISPONIBILIDAD -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Disponibilidad</label>
                        <select name="estado" class="form-select" required>
                            <option value="disponible">Disponible</option>
                            <option value="no_disponible">No disponible</option>
                        </select>
                    </div>

                    <!-- DESCRIPCIÓN -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Descripción</label>
                        <textarea name="descripcion" rows="3" class="form-control" placeholder="Descripción del equipo"></textarea>
                    </div>

                    <!-- IMAGEN -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Imagen del equipo</label>
                        <input type="file" name="imagen" class="form-control">
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Guardar Equipo
                    </button>
                    <a href="index.php?module=equipo_sonido&view=ver" class="btn btn-outline-secondary">
                        Cancelar
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
