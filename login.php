<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Bima | Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>				
		<div class="container-fluid rounded-2 mx-auto mt-5 p-5" style="background-color: white; width: 400px">
			<div class="row d-flex justify-content-center">
				<!-- <div class="col-3"></div> -->
				<div class="col-7" style="width: 100px">
					<img src="image/bima.jpg" alt="" class="img-fluid rounded-circle" />
				</div>
			</div>
			<h2 class="h2 text-center">BIMA</h2>
			<h3 class="text-center">Sistem Informasi Akademik</h3>

			<!-- form  -->
			<form class="">
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">User Name</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1"/>
				</div>
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1" />
					<label class="form-check-label" for="exampleCheck1">Saya bukan robot</label>
				</div>
				<div class="d-grid gap-2 mb-3">
					<button class="btn btn-primary" type="button">Log In</button>
				</div>
			</form>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>
