<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Lugares Disponibles</h4>
            <p class="text-muted mb-0">Espacios registrados para la realización de eventos.</p>
        </div>

        <a href="#" class="btn btn-primary">
            <i class="bi bi-geo-alt"></i> Nuevo Lugar
        </a>
    </div>

    <!-- FILTROS -->
    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar lugar...">
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Tipo de lugar</option>
                        <option>Salón</option>
                        <option>Finca</option>
                        <option>Auditorio</option>
                        <option>Restaurante</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Capacidad</option>
                        <option>Hasta 50 personas</option>
                        <option>51 - 100 personas</option>
                        <option>101 - 200 personas</option>
                        <option>Más de 200</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- LISTADO DE LUGARES -->
    <div class="row g-4">

        <!-- LUGAR 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://picsum.photos/600/400?1" class="card-img-top" alt="Lugar">
                <div class="card-body">
                    <h5 class="card-title mb-1">Salón Primavera</h5>
                    <p class="text-muted small mb-2">Capacidad: 120 personas</p>
                    <p class="small">
                        Espacio elegante ideal para bodas y celebraciones familiares.
                    </p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                    <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                </div>
            </div>
        </div>

        <!-- LUGAR 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://picsum.photos/600/400?2" class="card-img-top" alt="Lugar">
                <div class="card-body">
                    <h5 class="card-title mb-1">Finca El Paraíso</h5>
                    <p class="text-muted small mb-2">Capacidad: 200 personas</p>
                    <p class="small">
                        Lugar campestre perfecto para eventos al aire libre.
                    </p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver</a>
                    <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                </div>
            </div>
        </div>

        <!-- LUGAR 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://picsum.photos/600/400?3" class="card-img-top" alt="Lugar">
                <div class="card-body">
                    <h5 class="card-title mb-1">Auditorio Central</h5>
                    <p class="text-muted small mb-2">Capacidad: 300 personas</p>
                    <p class="small">
                        Ideal para eventos corporativos y conferencias.
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
