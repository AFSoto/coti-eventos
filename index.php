<?php
// =====================================================
// CONFIGURACIÓN BÁSICA
// =====================================================
session_start();

require_once 'vendor/autoload.php';

use Dotenv\Dotenv;
// Cargar variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once './includes/db_connection.php';
require_once './includes/functions.php';
require_once './includes/config.php';
// require_once './helpers/auth.php';

//  llamamos a la clase de la libreria de google que descargaamos para poder 
// llenar los datos que necesitamos para redirigir a los servidores de google
// y lo llamamos aca en el index por que estamos usando un modal para el inicio de sesion

$client = new Google_Client();
$client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URL']);
$client->addScope("email");
$client->addScope("profile");



// Generamos la URL para el botón
$url_google = $client->createAuthUrl();

//detercar el rol del usuario para ver que header y footer cargar
// Por defecto usamos el layout de cliente
$headerPath = './layout/header.php';
$footerPath = './layout/footer.php';

// 1. Detección de Rol y Configuración de Layout
$isAdmin = (isset($_SESSION['rol']) && $_SESSION['rol'] === 'Administrador');

$headerPath = $isAdmin ? './views/admin/layout/header.php' : './layout/header.php';
$footerPath = $isAdmin ? './views/admin/layout/footer.php' : './layout/footer.php';

// =====================================================
// PARÁMETROS GET
// =====================================================
//
$module = $_GET['module'] ?? 'home';
$view   = $_GET['view']   ?? 'index';
$action = $_GET['action'] ?? null;



// =====================================================
// LISTAS BLANCAS (SEGURIDAD)
// =====================================================

// Módulos (carpetas principales)
$modulosPermitidos = [
    'vestuarios',
    'bodas',
    'admin',
    'dashboard',
     'reporte',
     'configuracion',
    'home',
    'usuarios',
    'lugares',
    'eventos',
    'cotizaciones',
    'vestuarios',
    'vestidos',
    'platillos',
    'cocteles',
    'postres',
    'tortas',
    'menu',
    'cumple',
    'xv',
    'bautizos',
    'baby_showers',
    'graduaciones',
    'sonido'
];

// Acciones permitidas por módulo
$accionesPermitidas = [
    'usuarios' => ['crear', 'editar', 'eliminar', 'login', 'logout', 'callback','listar'],
    'lugares' => ['crear', 'editar', 'eliminar'],
    'eventos' => ['crear', 'editar', 'eliminar'],
    'cotizaciones' => ['crear', 'aprobar', 'rechazar', 'completar'],
    'vestuarios' => ['crear', 'editar', 'asignar'],
    'vestidos' => ['crear', 'editar', 'asignar'],
    'platillos' => ['asignar'],
    'cocteles' => ['asignar'],
    'postres' => ['asignar'],
    'tortas' => ['asignar'],
    'menu' => ['asignar'],
    'cumple' => ['asignar'],
    'xv' => ['asignar'],
    'bautizos' => ['asignar'],
    'baby_showers' => ['asignar'],
    'graduaciones' => ['asignar'],
    'sonido' => ['asignar']
];

//cargamos las acciones aca para evitar que cuando vaya a una accion lleve el html del header
if ($action) {

    if (
        isset($accionesPermitidas[$module]) &&
        in_array($action, $accionesPermitidas[$module])
    ) {

        $actionFile = "./acciones/$module/$action.php";

        if (file_exists($actionFile)) {
            require $actionFile;
            exit;
        }
    }
}

// =====================================================
// HEADER
// =====================================================
// =====================================================
require_once  $headerPath;

// =====================================================
// CARGA DE VISTAS
// =====================================================

// Le damos una altura fija al contenedor para que el scroll funcione adentro
// Este div principal establece la altura disponible (100% del viewport menos 80px del header)
// y oculta cualquier overflow para controlar exactamente dónde aparece el scroll
if($isAdmin){
echo '<div class="d-flex" style="height: calc(100vh - 80px); overflow: hidden;">';
} else {
echo '<div>';
}


// SIDEBAR (Solo Admin)
// Este bloque renderiza la barra lateral solo si el usuario es administrador
if ($isAdmin) {
    $sidebarPath = './views/admin/layout/sidebar.php';
    if (file_exists($sidebarPath)) {
        // <aside>: elemento semántico HTML5 para contenido lateral complementario
        // border-end: añade un borde en el lado derecho del sidebar
        // d-none d-md-block: oculta el sidebar en pantallas pequeñas (mobile) y lo muestra desde tablets en adelante
        // shadow-sm: añade una sombra sutil para dar profundidad visual
        // min-width: 250px: establece un ancho mínimo fijo para el sidebar
        // flex-shrink: 0: evita que el sidebar se comprima cuando el contenido principal crece
        echo '<aside class="border-end d-none d-md-block shadow-sm" style="min-width: 250px; flex-shrink: 0;">';
        require_once $sidebarPath;
        echo '</aside>';
    }
}

// CONTENIDO DINÁMICO
// Este <main> contiene el contenido principal de la página
// overflow-y-auto: permite el scroll vertical solo en esta sección, manteniendo el header y sidebar fijos
// Si es admin: flex-grow-1 hace que ocupe todo el espacio restante después del sidebar, p-4 añade padding
// Si no es admin: w-100 hace que ocupe el 100% del ancho disponible
echo '<main class="' . ($isAdmin ? 'flex-grow-1 p-4' : 'w-100') . '" style="overflow-y: auto;">';

// Validación de seguridad: verifica que el módulo solicitado esté en la lista de módulos permitidos
if (in_array($module, $modulosPermitidos)) {

    // Construye la ruta según si es admin o no
    if ($isAdmin) {
        $viewFile = "./views/admin/$module/$view.php";
    } else {
        $viewFile = "./views/$module/$view.php";
    }

    // Verifica que el archivo exista antes de cargarlo
    if (file_exists($viewFile)) {
        require $viewFile;
    } else {
        require './views/404.php';
    }

} else {
    // Módulo no permitido → 404
    require './views/404.php';
}

echo '</main>'; // Cierra el contenedor principal

echo '</div>'; // Fin del contenedor flex principal
// =====================================================
// EJECUCIÓN DE ACCIONES (POST / lógica)
// =====================================================

// =====================================================
// FOOTER
// =====================================================
require_once $footerPath;