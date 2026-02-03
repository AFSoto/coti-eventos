<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

<div class="container py-4">

<!-- Header -->
<div class="d-flex justify-content-between align-items-center mb-4">
<h5 class="fw-semibold mb-0 fs-2">Elige Tu Vestido y Traje Ideal</h5>
<span class="badge bg-light text-dark px-4 py-2 rounded-pill mb-3 fs-1">Bodas</span>
</div>

<!-- Selector -->
<div class="row mb-4">
<div class="col-md-6">
<label class="form-label fw-semibold fs-2">Seleccionar género</label>
<select class="form-select rounded-3" id="genero">
<option value="femenino" selected>Femenino</option>
<option value="masculino">Masculino</option>
</select>
</div>
</div>

<!-- Grid productos -->
<div class="row g-4 text-center">

<!-- ===== VESTIDOS (FEMENINO) ===== -->
<div class="col-12 col-md-6 producto" data-genero="femenino">
<div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
<a href="<?= BASE_URL ?>module=vestidos&view=detalle_sirena"
class="text-decoration-none text-dark d-flex flex-column h-100">
<div class="ratio ratio-4x3">
<img src="https://i.pinimg.com/736x/75/5c/3d/755c3df8affb13b002219a25024139b7.jpg"
class="img-fluid object-fit-cover">
</div>
<div class="card-body">
<h6 class="fw-semibold mb-1">Vestido sirena</h6>
<p class="fw-bold mb-0">$500.000</p>
</div>
</a>
</div>
</div>

<div class="col-12 col-md-6 producto" data-genero="femenino">
<div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
<a href="<?= BASE_URL ?>module=vestidos&view=detalle_princesa"
class="text-decoration-none text-dark d-flex flex-column h-100">
<div class="ratio ratio-4x3">
<img src="https://i.pinimg.com/736x/f1/35/46/f1354605db75c9ccdb680877f5cc857a.jpg"
class="img-fluid object-fit-cover">
</div>
<div class="card-body">
<h6 class="fw-semibold mb-1">Vestido princesa</h6>
<p class="fw-bold mb-0">$500.000</p>
</div>
</a>
</div>
</div>

<div class="col-12 col-md-6 producto" data-genero="femenino">
<div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
<a href="<?= BASE_URL ?>module=vestidos&view=detalle_recto"
class="text-decoration-none text-dark d-flex flex-column h-100">
<div class="ratio ratio-4x3">
<img src="https://i.pinimg.com/736x/58/38/b1/5838b1a9a8a6ef3306c226e52d3bac41.jpg"
class="img-fluid object-fit-cover">
</div>
<div class="card-body">
<h6 class="fw-semibold mb-1">Vestido recto</h6>
<p class="fw-bold mb-0">$500.000</p>
</div>
</a>
</div>
</div>

<div class="col-12 col-md-6 producto" data-genero="femenino">
<div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
<a href="<?= BASE_URL ?>module=vestidos&view=detalle_a"
class="text-decoration-none text-dark d-flex flex-column h-100">
<div class="ratio ratio-4x3">
<img src="https://i.pinimg.com/1200x/35/9a/65/359a6535d23c31d7d3cd52527c836717.jpg"
class="img-fluid object-fit-cover">
</div>
<div class="card-body">
<h6 class="fw-semibold mb-1">Vestido en A</h6>
<p class="fw-bold mb-0">$500.000</p>
</div>
</a>
</div>
</div>

<!-- ===== TRAJES (MASCULINO) ===== -->
<div class="col-12 col-md-6 producto d-none" data-genero="masculino">
<div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
<a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_clasico"
class="text-decoration-none text-dark d-flex flex-column h-100">

<div class="ratio ratio-4x3">
<img src="https://i.pinimg.com/736x/ef/b2/5e/efb25e0e8909c5004163439ea4144dc9.jpg"
class="img-fluid object-fit-cover">
</div>
<div class="card-body">
<h6 class="fw-semibold mb-1">Traje clásico</h6>
<p class="fw-bold mb-0">$650.000</p>
</div>
</a>
</div>
</div>

<div class="col-12 col-md-6 producto d-none" data-genero="masculino">
<div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
<a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_slim_fit"
class="text-decoration-none text-dark d-flex flex-column h-100">
<div class="ratio ratio-4x3">
<img src="https://i.pinimg.com/736x/4f/2b/cd/4f2bcd52ad2c2b56953a4a053182167c.jpg"
class="img-fluid object-fit-cover">
</div>
<div class="card-body">
<h6 class="fw-semibold mb-1">Traje slim fit</h6>
<p class="fw-bold mb-0">$700.000</p>
</div>
</a>
</div>
</div>

<div class="col-12 col-md-6 producto d-none" data-genero="masculino">
<div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
<a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_tres_piezas"
class="text-decoration-none text-dark d-flex flex-column h-100">
<div class="ratio ratio-4x3">
<img src="https://i.pinimg.com/1200x/f2/a1/ca/f2a1ca2bac18b0ff4e0e01724e56914b.jpg"
class="img-fluid object-fit-cover">
</div>
<div class="card-body">
<h6 class="fw-semibold mb-1">Traje de Tres Piezas</h6>
<p class="fw-bold mb-0">$650.000</p>
</div>
</a>
</div>
</div>

<div class="col-12 col-md-6 producto d-none" data-genero="masculino">
<div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
<a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_smoking"
class="text-decoration-none text-dark d-flex flex-column h-100">
<div class="ratio ratio-4x3">
<img src="https://i.pinimg.com/1200x/7d/06/a9/7d06a97a0e16ec7baa7c3d168f65e763.jpg"
class="img-fluid object-fit-cover">
</div>
<div class="card-body">
<h6 class="fw-semibold mb-1">Smoking</h6>
<p class="fw-bold mb-0">$650.000</p>
</div>
</a>
</div>
</div>

</div>
</div>

<!-- JS -->
<script>
document.getElementById('genero').addEventListener('change', function () {
const generoSeleccionado = this.value;
const productos = document.querySelectorAll('.producto');

productos.forEach(producto => {
if (producto.dataset.genero === generoSeleccionado) {
producto.classList.remove('d-none');
} else {
producto.classList.add('d-none');
}
});
});
</script>

</body>

