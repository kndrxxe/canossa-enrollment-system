<?php
session_start();
// Check if the session variable is set
if (!isset($_SESSION['formSubmitted'])) {
    // If not set, redirect to the home page or form page
    header('Location: index.php');
    exit();
} else {
    // Unset the session variable to prevent direct access in the future
    unset($_SESSION['formSubmitted']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Enrolled Successfully | Plaridel Integrated National High Schoole</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Bootstrap icons-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <style>
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
        }

        .form-select:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
        }

        i {
            font-size: 25px;
        }

        a {
            text-decoration: none;
        }
    </style>
    </style>

</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
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
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->

                <div class="bg-white rounded-4 py-5 px-4 px-md-05">
                    <div class="text-center">
                        <img width="300" src="success.png" alt="">
                        <h1 class="display-4 mt-4 fw-bolder text-success">ENROLLED SUCCESSFULLY</h1>
                        <p class="fs-4">Your enrollment has been successfully processed.<br>Please wait for the confirmation message from the school.</p>
                        <a class="btn btn-success fs-4 mt-4" href="index">Back to Home</a>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <footer class="bg-success py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white"><b>Copyright &copy; Plaridel Integrated National High School | 2024</b></div>
                </div>
                <div class="col-auto">
                    <b>
                        <a class="link-light small" href="https://www.facebook.com/depedtayoplaridelinhs301258/"><i class="bi bi-facebook"></i> Facebook</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!"><i class="bi bi-messenger"></i> Messenger</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="mailto:301258@deped.gov.ph"><i class="bi bi-envelope"></i> Email</a>
                    </b>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>