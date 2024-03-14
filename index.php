<?php 

require 'data.php';	
// membuat logika untuk mengatasi user saat login salah input email atau password
$login = false;
$id_user = 0;
foreach ($students as $student) {
	if ($_POST["email"] == $student["email"] && $_POST["password"] == $student["password"] && $_POST["verification"] == "on" ) {
		$login = true;
		break;
	}
	$id_user++;
}

if (!$login) {
	header("Location: login.php");
	exit();

}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>BIMA | Sistem Informasi Akademik</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
		<style>
			body {
				background-color: #aeecec;
			}
		</style>
	</head>
	<body>
		<!-- navbar-->
		<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand fw-bolder" href="#">BIMA</a>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Dashboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Jadwal Kuliah</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Jadwal Ujian</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Hasil Studi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pengajuan KRS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Cetak KRP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Jadwal Dosen</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- akhir dari navbar -->

		<!-- content main -->
		<section class="container-fluid mt-5">
			<div class="row justify-content-center p-5">
				<div class="col-6">
					<h3 class="text-center">
						<?php echo $students[$id_user]["name"] ?>
						<span class="opacity-50 fs-3">
							 (<?php echo $students[$id_user]["nim"] ?>)
						</span>
					</h3>		
					<h4 class="fs-5 fw-light text text-center">Fakultas Teknik Industri | Teknik Informatika | Informatika</h4>
				</div>
			</div>
			<div class="row bg-light p-5">
				<div class="col-6">
					<h6>Informasi</h6>
					<hr />
					<dl>
						<dt>Perwalian</dt>
						<dd>Anda telah melakukan perwalian di semester genap</dd>
						<dt>Tugas Akhir</dt>
						<dd>Anda bisa mengambil 6 SKS</dd>
						<dt>Tunggakan</dt>
						<dd>tidak ada tunggakan</dd>
					</dl>
				</div>
				<div class="col-6">
					<h6>Pengumuman</h6>
					<hr />
					<!-- Button trigger modal -->
					<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<dl class="text-start">
							<dt>JADWAL REVISI KRS ONLINE FTI SMT GENAP TA 2023/2024</dt>
							<dl>PADA AKHIR PERIODE PENGINPUTAN, MATA KULIAH YANG SUDAH DIINPUT OTOMATIS...</dl>
						</dl>
					</button>
				</div>
			</div>
		</section>
		<!-- akhir dari content main -->

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">JADWAL REVISI KRS ONLINE FTI SMT GENAP TA 2023/2024</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">			
						<p>
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad eveniet enim, porro alias magni vitae omnis repellendus nam minus! In architecto quas fuga libero nesciunt minima suscipit temporibus dolore, quam maiores sint
							officia harum deserunt iure. Temporibus pariatur expedita a quo enim vero consectetur nihil nesciunt adipisci molestias reprehenderit quisquam assumenda sed non sapiente, perspiciatis neque sequi deleniti. Nihil molestias
							provident numquam voluptates, illum soluta fugit ratione deserunt quas eveniet? Labore fugiat officiis repellat temporibus dolores autem dolorem voluptate, ex fuga alias illo iure consequuntur voluptatem, sint sapiente quas
							nemo nihil? Sit, fugiat! Illo doloribus fugit minus ullam assumenda officia perspiciatis, porro, doloremque inventore dolorem quia modi corporis qui eligendi quam nostrum deleniti? Perspiciatis quam nulla quos itaque debitis
							aliquam qui dignissimos ipsum accusamus eius maxime facere quibusdam hic magni inventore, minus necessitatibus error voluptatum aspernatur architecto, eos officia sit ex. Vero nulla aspernatur asperiores quam, quidem magni
							facere debitis, ratione quasi pariatur odio. Voluptatum impedit, incidunt ipsum soluta cupiditate distinctio inventore delectus expedita. Rerum neque praesentium voluptates? Facere aspernatur tenetur repellendus, deserunt esse
							inventore deleniti officiis natus vitae cum libero illo. Aut corrupti quod excepturi natus nam quis, recusandae cumque id dignissimos, rem suscipit nisi eos reiciendis. Mollitia, numquam.
						</p>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>
