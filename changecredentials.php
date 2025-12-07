<?php
session_start();

include 'conn.php';

if (isset($_SESSION['user'])) {
    if (time() - $_SESSION['login_time_stamp'] > 600) {
        session_unset();
        session_destroy();
        header("Location: admin-login.php");
    } else {
        $_SESSION['login_time_stamp'] = time();
    }
} else {
    header('Location: admin-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />

    <title>Change Credentials | Plaridel Integrated National High School</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


    <style>
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
        }

        .form-select:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
        }

        a {
            text-decoration: none;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="superadminhome">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img width="50" src="assets/favicon.png" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">SETTINGS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="settings">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Faculty</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manageaccount">
                    <i class="fas fa-users-cog"></i>
                    <span>Manage Account</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="changecredentials">
                    <i class="fas fa-users-cog"></i>
                    <span>Change Credentials</span>
                </a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link text-success d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="text-transform:uppercase;">Logged in as, <span class="text-success"><strong><?php echo $_SESSION['user']; ?></strong></span></span>
                                <img class="img-profile rounded-circle" src="default-profile-pic.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="settings">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="superadmin-logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php
                include 'conn.php';
                $id = $_SESSION['user'];
                $query = mysqli_query($conn, "SELECT * FROM superadmin where id='$id'") or die(mysqli_error());
                $row = mysqli_fetch_array($query);
                ?>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <form class="needs-validation" action="updatefaculty.php" method="POST" novalidate enctype="multipart/form-data">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
                            <h1 class="h1 mb-0 text-success" style="text-transform:uppercase;"><b>Change Credentials</b></h1>
                        </div>
                        <?php
                        if (isset($_SESSION['updateerror'])) {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show text-start" role="alert">
                                <i class="fas fa-exclamation-triangle" width="24" height="24"></i>
                                <?= $_SESSION['updateerror']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                            unset($_SESSION['updateerror']);
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['updatesuccess'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show text-start" role="alert">
                                <i class="fas fa-check-circle" width="24" height="24"></i>
                                <?= $_SESSION['updatesuccess']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                            unset($_SESSION['updatesuccess']);
                        }
                        ?>
                        <div class="card shadow mb-4 p-1">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header fw-bold">
                                        <i class="fas fa-key text-success "></i> Change Password
                                    </div>
                                    <?php
                                    include 'conn.php';
                                    $user = $_SESSION['user'];
                                    $query = mysqli_query($conn, "SELECT * FROM superadmin where username='$user'") or die(mysqli_error());
                                    $row = mysqli_fetch_array($query);
                                    ?>
                                    <div class="card-body fs-5 fw-bold mb-0 d-flex justify-content-between align-items-center">
                                        <p style="margin-bottom: 0px;">Password
                                            <br><span style="font-size: 15px;" class="text-secondary fw-normal fst-italic">
                                                <?php
                                                $lastPasswordChange = new DateTime($row['last_password_change']);
                                                $now = new DateTime();

                                                $interval = $lastPasswordChange->diff($now);
                                                if ($interval->y > 0) {
                                                    if ($interval->y == 1) {
                                                        echo "You changed your password " . $interval->format('%y year') . " ago.";
                                                    } else {
                                                        echo "You changed your password " . $interval->format('%y years') . " ago.";
                                                    }
                                                } elseif ($interval->m > 0) {
                                                    if ($interval->m == 1) {
                                                        echo "You changed your password " . $interval->format('%m month') . " ago.";
                                                    } else {
                                                        echo "You changed your password " . $interval->format('%m months') . " ago.";
                                                    }
                                                } elseif ($interval->d > 0) {
                                                    if ($interval->d == 1) {
                                                        echo "You changed your password " . $interval->format('%d day') . " ago.";
                                                    } else {
                                                        echo "You changed your password " . $interval->format('%d days') . " ago.";
                                                    }
                                                } elseif ($interval->h > 0) {
                                                    if ($interval->h == 1) {
                                                        echo "You changed your password " . $interval->format('%h hour') . " ago.";
                                                    } else {
                                                        echo "You changed your password " . $interval->format('%h hours') . " ago.";
                                                    }
                                                } elseif ($interval->i > 0) {
                                                    if ($interval->i == 1) {
                                                        echo "You changed your password " . $interval->format('%i minute') . " ago.";
                                                    } else {
                                                        echo "You changed your password " . $interval->format('%i minutes') . " ago.";
                                                    }
                                                } else {
                                                    if ($interval->s == 1) {
                                                        echo "You changed your password " . $interval->format('%s second') . " ago.";
                                                    } else {
                                                        echo "You changed your password " . $interval->format('%s seconds') . " ago.";
                                                    }
                                                } ?>
                                        </p>
                                        <a href="changepassword.php?id=<?php echo md5($user); ?>" class="btn btn-success">
                                        <i class="fas fa-key"></i></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span><b>Copyright &copy; Plaridel Integrated National High School | 2024</b></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        document.querySelector('[name="firstName"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^a-zA-Z ]/g, '').toUpperCase();
        });
        document.querySelector('[name="middleName"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^a-zA-Z ]/g, '').toUpperCase();
        });
        document.querySelector('[name="lastName"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^a-zA-Z ]/g, '').toUpperCase();
        });
    </script>

</body>

</html>