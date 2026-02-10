<div class="container-fluid py-4">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h4 class="fw-bold mb-0">Configuración del Sistema</h4>
        <p class="text-muted mb-0">Administra los ajustes generales y parámetros del sistema.</p>
    </div>

    <!-- PESTAÑAS DE CONFIGURACIÓN -->
    <ul class="nav nav-tabs mb-4" id="configTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab">General</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="correo-tab" data-bs-toggle="tab" data-bs-target="#correo" type="button" role="tab">Correo</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="roles-tab" data-bs-toggle="tab" data-bs-target="#roles" type="button" role="tab">Roles</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="parametros-tab" data-bs-toggle="tab" data-bs-target="#parametros" type="button" role="tab">Parámetros</button>
        </li>
    </ul>

    <div class="tab-content" id="configTabsContent">

        <!-- GENERAL -->
        <div class="tab-pane fade show active" id="general" role="tabpanel">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Configuración General</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nombre de la Empresa</label>
                            <input type="text" class="form-control" value="CotiEventos">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dirección</label>
                            <input type="text" class="form-control" value="San Luis, Antioquia">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="text" class="form-control" value="+57 300 000 0000">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Logo</label>
                            <input type="file" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- CORREO -->
        <div class="tab-pane fade" id="correo" role="tabpanel">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Configuración de Correo</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Servidor SMTP</label>
                            <input type="text" class="form-control" value="smtp.midominio.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Puerto</label>
                            <input type="number" class="form-control" value="587">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Usuario</label>
                            <input type="text" class="form-control" value="correo@midominio.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- ROLES -->
        <div class="tab-pane fade" id="roles" role="tabpanel">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Gestión de Roles</h5>
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nombre del Rol</th>
                                <th class="text-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Administrador</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Usuario</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-outline-warning">Editar</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary mt-3"><i class="bi bi-plus-circle"></i> Nuevo Rol</button>
                </div>
            </div>
        </div>

        <!-- PARÁMETROS -->
        <div class="tab-pane fade" id="parametros" role="tabpanel">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Parámetros Generales</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Tiempo de expiración de sesión (minutos)</label>
                            <input type="number" class="form-control" value="30">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cantidad máxima de eventos por día</label>
                            <input type="number" class="form-control" value="10">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
