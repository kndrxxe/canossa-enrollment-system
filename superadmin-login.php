<?php
session_start();

include 'conn.php';
if (isset($_SESSION['user'])) {
	header('Location: superadminhome.php');
} else {

	if (isset($_POST['username']) && isset($_POST['password'])) {
		function validate($data)
		{
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$username = validate($_POST['username']);
		$password = validate($_POST['password']);
		$sql = "SELECT * FROM superadmin WHERE username=? AND password=?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$result = $stmt->get_result();

		if ($result->num_rows > 0) {
			// output data of each row
			$row = $result->fetch_assoc();
			$_SESSION['user'] = $row['username'];
			$_SESSION["login_time_stamp"] = time();
			header("Location:superadminhome.php");
			exit();
		} else {
			$_SESSION['loginstatus'] = "The Username/Password you entered is incorrect. Please try again.";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Login | Plaridel Integrated National High School</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.png" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="css/styles.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<style>
		body {
			background-image: url(plaridel-front.png);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.btn-login {
			font-size: 0.9rem;
			letter-spacing: 0.05rem;
			padding: 0.75rem 1rem;
		}

		.btn-google {
			color: white !important;
			background-color: #ea4335;
		}

		.btn-facebook {
			color: white !important;
			background-color: #3b5998;
		}

		.centered {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.form-control:focus {
			border-color: #28a745;
			box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
		}

		.form-select:focus {
			border-color: #28a745;
			box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
		}

		.form-check-input:checked {
			background-color: #28a745 !important;
			border: 0;
		}

		.form-check-input:focus,
		.label::after,
		label.form-check-label:focus,
		.form-check-input::after,
		.form-check-input:not(:disabled):not(.disabled):active:focus {
			color: black;
			outline: 0;
			border: 0;
			box-shadow: 0 0 0 0.1rem #28a745 !important;
		}
	</style>
</head>

<body class="d-flex flex-column">
	<main class="flex-shrink-0">
		<nav class="navbar navbar-expand-lg navbar-dark bg-success">
			<div class="container px-5">
				<a class="navbar-brand" href="index">
					<img src="assets/favicon.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-middle">
					<img src="logo.png" width="130">
					<b></b>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item"><a class="nav-link" href="index">Back to Home</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</main>

	<body>
		<div class="centered">
			<div class="container">
				<div class="row">
					<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
						<div class="card border-0 shadow rounded-3 my-5">
							<div class="card-body p-4 p-sm-5">
								<h5 class="card-title text-center mb-3 fw-bold fs-1 text-success">LOGIN</h5>
								<?php
								if (isset($_SESSION['loginstatus'])) {
								?>
									<div class="alert alert-danger text-center" role="alert">
										<i class="bi bi-exclamation-triangle-fill" width="24" height="24"></i>
										<?= $_SESSION['loginstatus']; ?>
									</div>
								<?php
									unset($_SESSION['loginstatus']);
								}
								?>
								<form class="needs-validation" action="superadmin-login.php" method="POST" novalidate="">
									<div class="form-floating mb-2">
										<input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username" required>
										<label for="floatingInput">Username</label>
										<div class="invalid-feedback mt-1">
											Username is required!
										</div>
									</div>
									<div class="form-floating mb-2">
										<input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
										<label for="floatingPassword">Password</label>
										<div class="invalid-feedback mt-1">
											Password is required!
										</div>
									</div>
									<div class="mt-0 mb-3 text-start">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" onclick="myFunction()" id="flexCheckDefault">
											<label class="form-check-label text-dark" for="flexCheckDefault">
												Show Password
											</label>
										</div>
									</div>
									<div class="d-grid">
										<button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">Sign in</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
		<!-- Github buttons -->
		<script async defer src="https://buttons.github.io/buttons.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script>
			function myFunction() {
				var x = document.getElementById("floatingPassword");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
		</script>
		<script>
			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(() => {
				'use strict'

				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				const forms = document.querySelectorAll('.needs-validation')

				// Loop over them and prevent submission
				Array.from(forms).forEach(form => {
					form.addEventListener('submit', event => {
						if (!form.checkValidity()) {
							event.preventDefault()
							event.stopPropagation()
						}

						form.classList.add('was-validated')
					}, false)
				})
			})()
		</script>
	</body>

</html>