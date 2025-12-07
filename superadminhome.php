<?php
session_start();

include 'conn.php';

if (isset($_SESSION['user'])) {
    if (time() - $_SESSION['login_time_stamp'] > 600) {
        session_unset();
        session_destroy();
        header("Location: superadmin-login.php");
    } else {
        $_SESSION['login_time_stamp'] = time();
    }
} else {
    header('Location: superadmin-login.php');
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

    <title>Dashboard | Plaridel Integrated National High School</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
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
                <div class="sidebar-brand-text mx-3">ENROLLMENT SYSTEM</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="superadminhome">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                List of Enrollees
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Grade Levels</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Grade Levels</h6>
                        <a class="collapse-item" href="supergrade-eleven">Grade 11</a>
                        <a class="collapse-item" href="supergrade-twelve">Grade 12</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Tracks</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header ">Tracks</h6>
                        <a class="collapse-item" href="superabm">Accountancy and<br>Business Management<br>(ABM)</a>
                        <a class="collapse-item" href="superhumss">Humanities and<br>Social Sciences (HUMSS)</a>
                        <a class="collapse-item" href="superstem">Science, Technology,<br>Engineering and<br>Mathematics (STEM)</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Technical Vocational<br>Livelihood (TVL) Strands</h6>
                        <a class="collapse-item" href="superagrifishery">Agri-Fishery Arts</a>
                        <a class="collapse-item" href="superict">Information and<br>Communication<br>Technology (ICT)</a>
                        <a class="collapse-item" href="superhomeeconomics">Home Economics (HE)</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="superbalik-aral">
                    <i class="fas fa-fw fa-undo-alt"></i>
                    <span>Balik-Aral</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="supertransferee">
                    <i class="fas fa-exchange-alt"></i>
                    <span>Transferee</span></a>
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
                                <a href="superadmin-logout.php" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h1 mb-0 text-success"><b>DASHBOARD</b></h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1" style="font-size: 20px;">
                                                Total Enrollees</div>
                                            <?php
                                            include 'conn.php';
                                            $query = "SELECT id FROM enrollment";
                                            $stmt = $conn->prepare($query);
                                            $stmt->execute();
                                            $result = $stmt->get_result();
                                            $row = $result->num_rows;
                                            echo '<div class="h4 mb-0 font-weight-bold text-gray-800">' . $row . '</div>';
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-success text-uppercase mb-1" style="font-size: 20px;">
                                                Male Enrollees</div>
                                            <?php
                                            include 'conn.php';
                                            $sex = 'Male';
                                            $query = "SELECT id FROM enrollment WHERE sex = ?";
                                            $stmt = $conn->prepare($query);
                                            $stmt->bind_param("s", $sex);
                                            $stmt->execute();
                                            $result = $stmt->get_result();
                                            $row = $result->num_rows;
                                            echo '<div class="h4 mb-0 font-weight-bold text-gray-800">' . $row . '</div>';
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-mars fa-4x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-danger text-uppercase mb-1" style="font-size: 20px;">Female Enrollees
                                            </div>
                                            <?php
                                            include 'conn.php';
                                            $sex = 'Female';
                                            $query = "SELECT id FROM enrollment WHERE sex = ?";
                                            $stmt = $conn->prepare($query);
                                            $stmt->bind_param("s", $sex);
                                            $stmt->execute();
                                            $result = $stmt->get_result();
                                            $row = $result->num_rows;
                                            echo '<div class="h4 mb-0 font-weight-bold text-gray-800">' . $row . '</div>';
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-venus fa-4x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <a style="text-decoration: none;" href="superbalik-aral">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-warning text-uppercase mb-1" style="font-size: 20px;">
                                                    RETURNEE (BALIK-ARAL)</div>
                                                <?php
                                                include 'conn.php';
                                                $balikaral = 'Yes';
                                                $query = "SELECT id FROM enrollment WHERE balikaral = ?";
                                                $stmt = $conn->prepare($query);
                                                $stmt->bind_param("s", $balikaral);
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                $row = $result->num_rows;
                                                echo '<div class="h4 mb-0 font-weight-bold text-gray-800">' . $row . '</div>';
                                                ?>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-undo fa-3x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a style="text-decoration: none;" href="supertransferee">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-info text-uppercase mb-1" style="font-size: 20px;">
                                                    TRANSFEREE</div>
                                                <?php
                                                include 'conn.php';
                                                $transfer = 'Yes';
                                                $query = "SELECT id FROM enrollment WHERE transfer = ?";
                                                $stmt = $conn->prepare($query);
                                                $stmt->bind_param("s", $transfer);
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                $row = $result->num_rows;
                                                echo '<div class="h4 mb-0 font-weight-bold text-gray-800">' . $row . '</div>';
                                                ?>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-exchange-alt fa-3x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        </a>
                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="m-0 font-weight-bold text-primary" style="text-transform: uppercase; ">LATEST ENROLLEE</h5>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mt-2 mb-4" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Learner Reference Number (LRN)</th>
                                                    <th>Name</th>
                                                    <th>Grade Level</th>
                                                    <th>Track</th>
                                                    <th>Strand</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include 'conn.php';
                                                $query = "SELECT * FROM enrollment ORDER BY id DESC LIMIT 3";
                                                $query_run = mysqli_query($conn, $query);
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    foreach ($query_run as $items) {
                                                ?>
                                                        <tr>
                                                            <td>
                                                                <?= $items['reference']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $items['firstname'] . " " . $items['middlename'] . " " . $items['lastname'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $items['gradelevel']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $items['track']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $items['strand']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $items['date']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $items['time']; ?>
                                                            </td>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="m-0 font-weight-bold text-primary" style="text-transform: uppercase; ">Enrollees per Track</h5>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body mb-4 mt-4">
                                    <div class="chart-pie">
                                        <canvas id="myPieChart" class="mt-1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

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
    <?php
    include 'conn.php';
    $query = "SELECT track, COUNT(*) as students FROM enrollment GROUP BY track";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $labels = array();
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['track'];
        $data[] = $row['students'];
    }
    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script>
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#e74a3b'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#cf4235'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        font: {
                            size: 16, // Set the font size
                            family: 'Arial', // Set the font family
                            weight: 'bold' // Set the font weight
                        }
                    }
                },
                cutoutPercentage: 50,
            },
        });
    </script>
</body>

</html>