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
		<!-- nav -->
		<!-- <nav class="navbar navbar-dark navbar-expand-lg">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="btn btn-primary nav-link active" aria-current="page" href="signup.php">Sign Up</a>
					</li>
				</ul>
				</div>
			</div>
		</nav> -->
		<!-- akhir dari nav -->

		<!-- container -->
		<div class="contaner d-flex justify-content-center align-items-center">
			<div class="container-fluid rounded-2 m-3 p-5" style="background-color: white; max-width: 400px; min-width: 250px" >
				<div class="row d-flex justify-content-center">
					<div class="col-7" style="width: 100px">
						<img src="image/bima.jpg" alt="" class="img-fluid rounded-circle" />
					</div>
				</div>
				<h2 class="h2 text-center">BIMA</h2>
				<h3 class="text-center">Sistem Informasi Akademik</h3>
	
				<!-- form  -->
				<form action="index.php" method="post">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required/>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control bi-eye-slash" id="exampleInputPassword1" name="password" required/>
					</div>
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1" name="verification"/>
						<label class="form-check-label" for="exampleCheck1">Saya bukan robot</label>
					</div>
					<div class="d-grid gap-2 mb-3">
						<button class="btn btn-primary" type="submit" name="submit">Log In</button>
						<a class="text-center nav-link" href="signup.php">Don't have an account ? Register</a>
					</div>
				</form>
			</div>
		</div>		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>
