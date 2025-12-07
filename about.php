<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>About | Plaridel Integrated National High School</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <style>
        i {
            font-size: 25px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-light-blue">
            <div class="container px-5">
                <a class="navbar-brand d-flex gap-2 align-items-center" href="index">
                    <img src="assets/favicon.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-middle">
                    <p class="title" style="line-height: 1.1; margin:0;">CANOSSA COLLEGE<br>SAN PABLO CITY INC.</p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Enrollment</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="enroll">Enroll Now</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5 animate__animated animate__fadeIn" style="background-image: url(canossa-front.jpg); background-size:cover; background-repeat: no-repeat; background-position: 50% 50%; ">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center my-5 animate__animated animate__fadeInUp">
                            <h1 class="fw-bolder mb-3 text-light display-5" style="text-transform: uppercase ">“We Form Hearts” and “Pusong Canossian”</h1>
                            <p class="lead fw-normal text-light mb-4">Parents, stakeholders, and the learners can expect a very dynamic, adaptable, and open administration at <b>PINHS</b> as it believes that an open line of communication is even more important today.</p>
                            <a class="btn btn-light-blue btn-lg" href="#scroll-target">Read our story</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section one-->
        <section class="py-5 bg-light" id="scroll-target" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="assets/favicon.png" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder display-5 text-light-blue">OUR HISTORY</h2>
                        <p class="lead fw-normal text-muted mb-0" style="text-align: justify">Canossa College, a Catholic Institution from Pre-school to College journeys through the years from its humble beginnings. It is run by the Canossian Daughters of Charity, Servants of the Poor, a religious congregation founded in Verona, Italy in 1808 by Marchioness Magdalene of Canossa. The congregation was approved by Pope Leo XII with “motu proprio” in 1828. At present, this congregation has established its apostolate in different parts of the world, in North and South America, Africa, Asia, Australia, Oceania and Europe.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section two-->
        <section class="py-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="canossa-front.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder display-5 text-light-blue">GROWTH AND BEYOND</h2>
                        <p class="lead fw-normal text-muted mb-0" style="text-align: justify">With a total of <b>6.060 square meter land</b> donated by the late <b>Mrs. Soledad Montañano</b> in 1988, the site stood buildings like SP building constructed through the joint effort of the Department of Education, Culture and Sports (DECS). Region IV-A DECS EDPITAF. Local school authorities and PTA.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team members section-->
        <section class="py-5 py-5 bg-light" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="container px-5 my-5">
                <div class="text-center" data-aos="fade-up">
                    <h1 class="fw-bolder display-5 text-light-blue">SCHOOL ORGANIZATIONAL CHART</h1>
                    <p class="lead fw-normal text-muted mb-5 fst-italic">SENIOR HIGH SCHOOL DEPARTMENT</p>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center mb-5" data-aos="fade-up">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <?php
                            include 'conn.php';
                            $query = "SELECT * FROM faculty WHERE type='Principal'";
                            $query_run = mysqli_query($conn, $query);
                            while ($items = mysqli_fetch_array($query_run)) {
                                if ($items['picture']) {
                                    // Display the profile picture
                                    $picture = $items['picture'];
                                } else {
                                    // Use a default profile picture
                                    $picture = 'default-profile-pic.jpg';
                                }
                                echo '<div class="col-auto">';

                                echo '<div class="col text-center">';
                                if (!empty($picture)) {
                                    echo '<img class="img-fluid rounded-circle mb-4 px-4" src="' . $picture . '" alt="Profile Picture" width="200">';
                                } else {
                                    echo '<img class="rounded-circle border border-warning mb-2" src="default-profile-pic.jpg" alt="Profile Picture" width="150">';
                                }
                                $id = $items['id'];
                                echo '</div>';
                                echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $items['firstName'] . ' ' . $items['middleName'] . '. ' . $items['lastName'] . '</h5>';
                                echo '<div class="fst-italic text-muted">' . $items['position'] . '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center mb-5" data-aos="fade-up">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <?php
                            include 'conn.php';
                            $query = "SELECT * FROM faculty WHERE type='Senior High School Coordinator'";
                            $query_run = mysqli_query($conn, $query);
                            while ($items = mysqli_fetch_array($query_run)) {
                                if ($items['picture']) {
                                    // Display the profile picture
                                    $picture = $items['picture'];
                                } else {
                                    // Use a default profile picture
                                    $picture = 'default-profile-pic.jpg';
                                }
                                echo '<div class="col-auto">';

                                echo '<div class="col text-center">';
                                if (!empty($picture)) {
                                    echo '<img class="img-fluid rounded-circle mb-4 px-4" src="' . $picture . '" alt="Profile Picture" width="200">';
                                } else {
                                    echo '<img class="rounded-circle border border-warning mb-2" src="default-profile-pic.jpg" alt="Profile Picture" width="150">';
                                }
                                $id = $items['id'];
                                echo '</div>';
                                echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $items['firstName'] . ' ' . $items['middleName'] . '. ' . $items['lastName'] . '</h5>';
                                echo '<div class="fst-italic text-muted">' . $items['type'] . '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up">
                    <h1 class="fw-bolder display-7 text-light-blue mb-5">Science, Technology, Engineering and Mathematics (STEM)</h1>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center mb-5" data-aos="fade-up">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <?php
                            include 'conn.php';
                            $query = "SELECT * FROM faculty WHERE type='Subject Group Head' AND track='STEM'";
                            $query_run = mysqli_query($conn, $query);
                            while ($items = mysqli_fetch_array($query_run)) {
                                if ($items['picture']) {
                                    // Display the profile picture
                                    $picture = $items['picture'];
                                } else {
                                    // Use a default profile picture
                                    $picture = 'default-profile-pic.jpg';
                                }
                                echo '<div class="col-auto">';

                                echo '<div class="col text-center">';
                                if (!empty($picture)) {
                                    echo '<img class="img-fluid rounded-circle mb-4 px-4" src="' . $picture . '" alt="Profile Picture" width="200">';
                                } else {
                                    echo '<img class="rounded-circle border border-warning mb-2" src="default-profile-pic.jpg" alt="Profile Picture" width="150">';
                                }
                                $id = $items['id'];
                                echo '</div>';
                                echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $items['firstName'] . ' ' . $items['middleName'] . '. ' . $items['lastName'] . '</h5>';
                                echo '<div class="fst-italic text-muted">' . $items['type'] . ' - ' . $items['track'] . '</div>';
                                echo '<div class="fst-italic text-muted">' . $items['position'] . '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap mb-5 row g-5 justify-content-center" data-aos="fade-up">
                    <?php
                    include 'conn.php';
                    $query = "SELECT * FROM faculty WHERE type='Teacher' AND track='STEM'";
                    $query_run = mysqli_query($conn, $query);
                    while ($items = mysqli_fetch_array($query_run)) {
                        if ($items['picture']) {
                            // Display the profile picture
                            $picture = $items['picture'];
                        } else {
                            // Use a default profile picture
                            $picture = 'default-profile-pic.jpg';
                        }
                        echo '<div class="col-auto text-center">';

                        if (!empty($picture)) {
                            echo '<img class="img-fluid rounded-circle mb-4 px-4" src="' . $picture . '" alt="Profile Picture" width="200">';
                        } else {
                            echo '<img class="rounded-circle border border-warning mb-2" src="default-profile-pic.jpg" alt="Profile Picture" width="150">';
                        }
                        $id = $items['id'];
                        $fullName = $items['firstName'] . ' ' . $items['middleName'] . '. ' . $items['lastName'];

                        // Check if the combined length exceeds 30 characters
                        if (strlen($fullName) > 30) {
                            // Break the name into a new line
                            echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $items['firstName'] . '<br>' . $items['middleName'] . '. ' . $items['lastName'] . '</h5>';
                        } else {
                            // Display the name on one line
                            echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $fullName . '</h5>';
                        }
                        echo '<div class="fst-italic text-muted">' . $items['position'] . '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="text-center" data-aos="fade-up">
                    <h1 class="fw-bolder display-7 text-light-blue mb-5">Humanities and Social Sciences<br>(HUMSS)</h1>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center mb-5" data-aos="fade-up">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <?php
                            include 'conn.php';
                            $query = "SELECT * FROM faculty WHERE type='Subject Group Head' AND track='HUMSS'";
                            $query_run = mysqli_query($conn, $query);
                            while ($items = mysqli_fetch_array($query_run)) {
                                if ($items['picture']) {
                                    // Display the profile picture
                                    $picture = $items['picture'];
                                } else {
                                    // Use a default profile picture
                                    $picture = 'default-profile-pic.jpg';
                                }
                                echo '<div class="col-auto">';

                                echo '<div class="col text-center">';
                                if (!empty($picture)) {
                                    echo '<img class="img-fluid rounded-circle mb-4 px-4" src="' . $picture . '" alt="Profile Picture" width="200">';
                                } else {
                                    echo '<img class="rounded-circle border border-warning mb-2" src="default-profile-pic.jpg" alt="Profile Picture" width="150">';
                                }
                                $id = $items['id'];
                                echo '</div>';
                                echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $items['firstName'] . ' ' . $items['middleName'] . '. ' . $items['lastName'] . '</h5>';
                                echo '<div class="fst-italic text-muted">' . $items['type'] . ' - ' . $items['track'] . '</div>';
                                echo '<div class="fst-italic text-muted">' . $items['position'] . '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap mb-5 row g-5 justify-content-center" data-aos="fade-up">
                    <?php
                    include 'conn.php';
                    $query = "SELECT * FROM faculty WHERE type='Teacher' AND track='HUMSS'";
                    $query_run = mysqli_query($conn, $query);
                    while ($items = mysqli_fetch_array($query_run)) {
                        if ($items['picture']) {
                            // Display the profile picture
                            $picture = $items['picture'];
                        } else {
                            // Use a default profile picture
                            $picture = 'default-profile-pic.jpg';
                        }
                        echo '<div class="col-auto text-center">';

                        if (!empty($picture)) {
                            echo '<img class="img-fluid rounded-circle mb-4 px-4" src="' . $picture . '" alt="Profile Picture" width="200">';
                        } else {
                            echo '<img class="rounded-circle border border-warning mb-2" src="default-profile-pic.jpg" alt="Profile Picture" width="150">';
                        }
                        $id = $items['id'];
                        $fullName = $items['firstName'] . ' ' . $items['middleName'] . '. ' . $items['lastName'];

                        // Check if the combined length exceeds 30 characters
                        if (strlen($fullName) > 30) {
                            // Break the name into a new line
                            echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $items['firstName'] . '<br>' . $items['middleName'] . '. ' . $items['lastName'] . '</h5>';
                        } else {
                            // Display the name on one line
                            echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $fullName . '</h5>';
                        }
                        echo '<div class="fst-italic text-muted">' . $items['position'] . '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="text-center" data-aos="fade-up">
                <h1 class="fw-bolder display-7 text-light-blue mb-5">Accountancy and Business Management (ABM)<br>Information and Communication Technology (ICT)</h1>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center mb-5" data-aos="fade-up">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <?php
                            include 'conn.php';
                            $query = "SELECT * FROM faculty WHERE type='Subject Group Head' AND track='ABM / ICT'";
                            $query_run = mysqli_query($conn, $query);
                            while ($items = mysqli_fetch_array($query_run)) {
                                if ($items['picture']) {
                                    // Display the profile picture
                                    $picture = $items['picture'];
                                } else {
                                    // Use a default profile picture
                                    $picture = 'default-profile-pic.jpg';
                                }
                                echo '<div class="col-auto">';

                                echo '<div class="col text-center">';
                                if (!empty($picture)) {
                                    echo '<img class="img-fluid rounded-circle mb-4 px-4" src="' . $picture . '" alt="Profile Picture" width="200">';
                                } else {
                                    echo '<img class="rounded-circle border border-warning mb-2" src="default-profile-pic.jpg" alt="Profile Picture" width="150">';
                                }
                                $id = $items['id'];
                                echo '</div>';
                                echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $items['firstName'] . ' ' . $items['middleName'] . '. ' . $items['lastName'] . '</h5>';
                                echo '<div class="fst-italic text-muted">' . $items['type'] . ' - ' . $items['track'] . '</div>';
                                echo '<div class="fst-italic text-muted">' . $items['position'] . '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap mb-5 row g-5 justify-content-center" data-aos="fade-up">
                    <?php
                    include 'conn.php';
                    $query = "SELECT * FROM faculty WHERE type='Teacher' AND track='ABM / ICT'";
                    $query_run = mysqli_query($conn, $query);
                    while ($items = mysqli_fetch_array($query_run)) {
                        if ($items['picture']) {
                            // Display the profile picture
                            $picture = $items['picture'];
                        } else {
                            // Use a default profile picture
                            $picture = 'default-profile-pic.jpg';
                        }
                        echo '<div class="col-auto text-center">';

                        if (!empty($picture)) {
                            echo '<img class="img-fluid rounded-circle mb-4 px-4" src="' . $picture . '" alt="Profile Picture" width="200">';
                        } else {
                            echo '<img class="rounded-circle border border-warning mb-2" src="default-profile-pic.jpg" alt="Profile Picture" width="150">';
                        }
                        $id = $items['id'];
                        $fullName = $items['firstName'] . ' ' . $items['middleName'] . '. ' . $items['lastName'];

                        // Check if the combined length exceeds 30 characters
                        if (strlen($fullName) > 30) {
                            // Break the name into a new line
                            echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $items['firstName'] . '<br>' . $items['middleName'] . '. ' . $items['lastName'] . '</h5>';
                        } else {
                            // Display the name on one line
                            echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $fullName . '</h5>';
                        }
                        echo '<div class="fst-italic text-muted">' . $items['position'] . '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="text-center" data-aos="fade-up">
                <h1 class="fw-bolder display-7 text-light-blue mb-5">Technical Vocational Livelihood (TVL)<br>Home Economics (HE)<br>Agri-Fishery Arts</h1>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center mb-5" data-aos="fade-up">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <?php
                            include 'conn.php';
                            $query = "SELECT * FROM faculty WHERE type='Subject Group Head' AND track='HE / AFA'";
                            $query_run = mysqli_query($conn, $query);
                            while ($items = mysqli_fetch_array($query_run)) {
                                if ($items['picture']) {
                                    // Display the profile picture
                                    $picture = $items['picture'];
                                } else {
                                    // Use a default profile picture
                                    $picture = 'default-profile-pic.jpg';
                                }
                                echo '<div class="col-auto">';

                                echo '<div class="col text-center">';
                                if (!empty($picture)) {
                                    echo '<img class="img-fluid rounded-circle mb-4 px-4" src="' . $picture . '" alt="Profile Picture" width="200">';
                                } else {
                                    echo '<img class="rounded-circle border border-warning mb-2" src="default-profile-pic.jpg" alt="Profile Picture" width="150">';
                                }
                                $id = $items['id'];
                                echo '</div>';
                                echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $items['firstName'] . ' ' . $items['middleName'] . '. ' . $items['lastName'] . '</h5>';
                                echo '<div class="fst-italic text-muted">' . $items['type'] . ' - ' . $items['track'] . '</div>';
                                echo '<div class="fst-italic text-muted">' . $items['position'] . '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap mb-5 row g-5 justify-content-center" data-aos="fade-up">
                    <?php
                    include 'conn.php';
                    $query = "SELECT * FROM faculty WHERE type='Teacher' AND track='HE / AFA'";
                    $query_run = mysqli_query($conn, $query);
                    while ($items = mysqli_fetch_array($query_run)) {
                        if ($items['picture']) {
                            // Display the profile picture
                            $picture = $items['picture'];
                        } else {
                            // Use a default profile picture
                            $picture = 'default-profile-pic.jpg';
                        }
                        echo '<div class="col-auto text-center">';

                        if (!empty($picture)) {
                            echo '<img class="img-fluid rounded-circle mb-4 px-4" src="' . $picture . '" alt="Profile Picture" width="200">';
                        } else {
                            echo '<img class="rounded-circle border border-warning mb-2" src="default-profile-pic.jpg" alt="Profile Picture" width="150">';
                        }
                        $id = $items['id'];
                        $fullName = $items['firstName'] . ' ' . $items['middleName'] . '. ' . $items['lastName'];

                        // Check if the combined length exceeds 30 characters
                        if (strlen($fullName) > 30) {
                            // Break the name into a new line
                            echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $items['firstName'] . '<br>' . $items['middleName'] . '. ' . $items['lastName'] . '</h5>';
                        } else {
                            // Display the name on one line
                            echo '<h5 class="fw-bolder text-light-blue text-uppercase">' . $fullName . '</h5>';
                        }
                        echo '<div class="fst-italic text-muted">' . $items['position'] . '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-light-blue py-4 mt-auto" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white"><b>Copyright &copy; Plaridel Integrated National High School | 2024</b></div>
                </div>
                <div class="col-auto">
                    <b>
                        <a class="link-light small" href="https://www.facebook.com/canossacollegespc/" target="_blank"><i class="bi bi-facebook"></i> Facebook</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="https://www.facebook.com/messages/t/1314940205290369" target="_blank"><i class="bi bi-messenger"></i> Messenger</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="mailto:canossaspc.directress@gmail.com"><i class="bi bi-envelope"></i> Email</a>
                    </b>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        AOS.init();
    </script>
</body>


</html>