<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Enroll Now | Plaridel Integrated National High Schoole</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Bootstrap icons-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/validate.css" rel="stylesheet" />
    <style>
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-light-blue">
            <div class="container px-5">
                <a class="navbar-brand" href="index">
                    <img src="assets/favicon.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-middle">
                    <img src="logo.png" width="130">
                    <b></b>
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
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->

                <div class="bg-light rounded-4 py-5 px-4 px-md-05 mb-2">
                    <div class="text-center mb-3">
                        <h1 class="display-4 fw-bolder text-light-blue">ENROLL NOW</h1>
                    </div>
                    <form action="enrollstudent.php" method="POST" class="needs-validation" novalidate>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="schoolyear" id="floatingSelect" required aria-label="Floating label select example">
                                            <option selected disabled>Select from options</option>
                                            <option value="2024 - 2025">2024 - 2025</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a school year.
                                        </div>
                                        <label for="floatingSelect">School Year</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name="gradelevel" required aria-label="Floating label select example">
                                            <option selected disabled>Select from options</option>
                                            <option value="Grade 11">Grade 11</option>
                                            <option value="Grade 12">Grade 12</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a grade level.
                                        </div>
                                        <label for="floatingSelect">Grade Level to Enroll</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="lrn" name="lrn">
                                            <option selected disabled>Select from options</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="floatingSelect">With LRN</label>
                                    </div>
                                    <div class="form-floating mb-3" style="display: none;" id="referenceNumber">
                                        <input class="form-control" name="reference" type="text" placeholder="LRN (Learner Reference Number)" maxlength="12" />
                                        <label id="referenceLabel"></label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="balikaral" name="balikaral">
                                            <option selected disabled>Select from options</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="floatingSelect">Returning (Balik-Aral)</label>
                                    </div>
                                    <div id="transferee">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="transferred" name="transfer">
                                                <option selected disabled>Select from options</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <label for="transferredSelect">Transferee</label>
                                        </div>
                                    </div>
                                    <!-- Name input-->
                                    <div class="form-floating mb-3" id="birthnumber">
                                        <input class="form-control" id="birthnum" name="birthnumber" type="text" placeholder="PSA Birth Certificate No. (if available upon registration)" maxlength="14" />
                                        <label id="birthnumber">PSA Birth Certificate No. (if available upon registration)</label>
                                    </div>
                                    <h5 class="text-light-blue"><strong>Personal Information</strong></h5>
                                    <div class="row g-2">
                                        <div class="col-md">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="lastname" name="lastname" required type="text" placeholder="Last Name" />
                                                <label for="lastname">Last Name</label>
                                                <div class="invalid-feedback">
                                                    Enter your Last Name
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Email address input-->
                                        <div class="col-md">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="firstname" name="firstname" required type="text" placeholder="First Name" />
                                                <label for="firstname">First Name</label>
                                                <div class="invalid-feedback">
                                                    Enter your First Name
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name="middlename" type="text" placeholder="Middle Name" />
                                                <label for="middlename">Middle Name (optional)</label>
                                            </div>
                                        </div>
                                        <!-- Email address input-->
                                        <div class="col-md">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="floatingSelect" name="extension" required aria-label="Floating label select example">
                                                    <option selected disabled>Select from options</option>
                                                    <option value="Jr.">Sr.</option>
                                                    <option value="Sr.">Jr.</option>
                                                    <option value="III">III</option>
                                                    <option value="N/A">N/A</option>
                                                </select>
                                                <label for="floatingSelect">Extension Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-9">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="birthday" name="birthday" required type="date" max="9999-12-31" />
                                                <label for="birthday">Birthday</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="age" name="age" type="text" required placeholder="Age" readonly />
                                                <label for="age">Age</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="sex" name="sex" required>
                                            <option selected disabled>Select from options</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <label for="floatingSelect">Sex</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="mother_tongue" name="mother_tongue" required>
                                            <option selected disabled>Select from options</option>
                                            <option value="Tagalog">Tagalog</option>
                                            <option value="Kapampangan">Kapampangan</option>
                                            <option value="Pangasinan">Pangasinan</option>
                                            <option value="Iloko">Iloko</option>
                                            <option value="Bikol">Bikol</option>
                                            <option value="Ybanag">Ybanag</option>
                                            <option value="Sinugbuanong Binisaya">Sinugbuanong Binisaya</option>
                                            <option value="Hiligaynon">Hiligaynon</option>
                                            <option value="Waray">Waray</option>
                                            <option value="Bahasa Sug">Bahasa Sug</option>
                                            <option value="Maguindanaoan">Maguindanaoan</option>
                                            <option value="Maranao">Maranao</option>
                                            <option value="Chavacano">Chavacano</option>
                                            <option value="Ivatan">Ivatan</option>
                                            <option value="Sambal">Sambal</option>
                                            <option value="Akianon">Akianon</option>
                                            <option value="Kinaray-a">Kinaray-a</option>
                                            <option value="Yakan">Yakan</option>
                                            <option value="Sinurigaonon">Sinurigaonon</option>
                                        </select>
                                        <label for="floatingSelect">Mother Tongue</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="placeofbirth" type="text" required placeholder="Place of Birth" />
                                        <label id="placeofbirth">Place of Birth (Municipality/City)</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="ip" name="ip" required>
                                            <option selected disabled>Select from options</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="floatingSelect">Belonging to any Indigenous People (IP)</label>
                                    </div>
                                    <div class="form-floating mb-3" style="display: none;" id="indigenousPeople">
                                        <input class="form-control" name="indigenous" type="text" placeholder="If Yes, please specify" />
                                        <label id="indigenousLabel"></label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="pantawid" name="pantawid" required>
                                            <option selected disabled>Select from options</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="floatingSelect">Is your family a beneficiary of 4Ps?</label>
                                    </div>
                                    <div class="form-floating mb-3" style="display: none;" id="pantawidProgram">
                                        <input class="form-control" name="pantawidProgram" maxlength="20" placeholder="If Yes, type the 4Ps Household ID Number below" />
                                        <label id="pantawidLabel"></label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="disability" required name="disability">
                                            <option selected disabled>Select from options</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <label for="floatingSelect">Is the child a Learner with Disability</label>
                                    </div>
                                    <div class="form-floating mb-3" style="display: none;" id="learnerdisability">
                                        <select class="form-select" name="learnerdisability" placeholder="If Yes, specify the type of disability">
                                            <option selected disabled>Select from options</option>
                                            <optgroup label="Visual Impairment">
                                                <option value="Blind">Blind</option>
                                                <option value="Low Vision">Low Vision</option>
                                            </optgroup>
                                            <optgroup label="Other Disabilities">
                                                <option value="Hearing Impairment">Hearing Impairment</option>
                                                <option value="Autism Spectrum Disorder">Autism Spectrum Disorder</option>
                                                <option value="Speech/Language Disorder">Speech/Language Disorder</option>
                                                <option value="Learning Disability">Learning Disability</option>
                                                <option value="Emotional-Behavioral Disorder">Emotional-Behavioral Disorder</option>
                                                <option value="Cerebral Palsy">Cerebral Palsy</option>
                                                <option value="Intellectual Disability">Intellectual Disability</option>
                                                <option value="Orthopedic/Physical Handicap">Orthopedic/Physical Handicap</option>
                                                <option value="Special Health Problem/Chronic Disease">Special Health Problem/Chronic Disease</option>
                                            </optgroup>
                                            <optgroup label="Multiple Disorder">
                                                <option value="Cancer">Cancer</option>
                                            </optgroup>
                                        </select>
                                        <label id="disabilityLabel"></label>
                                    </div>
                                    <h5 class="text-light-blue"><strong>Current Address</strong></h5>
                                    <div class="row g-2">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="housenumber_text" id="housenumber-text" placeholder="House No." required>
                                            <label class="form-label">House No.</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="streetname_text" id="streetname-text" placeholder="Sitio / Purok / Street Name" required>
                                            <label class="form-label">Sitio / Purok / Street Name</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="barangay_text" id="barangay-text" placeholder="Barangay" required>
                                            <label class="form-label">Barangay</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="city_text" id="city-text" placeholder="City / Municipality" required>
                                            <label class="form-label">Municipality / City</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="province_text" id="province-text" placeholder="Province" required>
                                            <label class="form-label">Province</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="country_text" id="country-text" placeholder="Country" required>
                                            <label class="form-label">Country</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control form-control-md" maxlength="4" name="zipcode" id="zipcode" placeholder="Zip Code" required>
                                            <label class="form-label">Zip Code</label>
                                        </div>
                                    </div>
                                    <h5 class="text-light-blue"><strong>Permanent Address</strong></h5>
                                    <div class="row g-2">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="permanent_housenumber_text" id="permanent-housenumber-text" placeholder="House No." required>
                                            <label class="form-label">House No.</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="permanent_streetname_text" id="permanent-streetname-text" placeholder="Sitio / Purok / Street Name" required>
                                            <label class="form-label">Sitio / Purok / Street Name</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="permanent_barangay_text" id="permanent-barangay-text" placeholder="Barangay" required>
                                            <label class="form-label">Barangay</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="permanent_city_text" id="permanent-city-text" placeholder="City / Municipality" required>
                                            <label class="form-label">Municipality / City</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="permanent_province_text" id="permanent-province-text" placeholder="Province" required>
                                            <label class="form-label">Province</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control form-control-md" name="permanent_country_text" id="permanent-country-text" placeholder="Country" required>
                                            <label class="form-label">Country</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control form-control-md" maxlength="4" name="permanent_zipcode" id="permanent-zipcode" placeholder="Zip Code" required>
                                            <label class="form-label">Zip Code</label>
                                        </div>
                                    </div>
                                    <h5 class="text-light-blue"><strong>Parents/Guardian's Information</strong></h5>
                                    <div class="row g-2">
                                        <div class="row g-2 mb-0">
                                            <h6 class="text-light-blue mb-0"><strong>Father's Name</strong></h6>
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input type="text" class="form-control" name="fathers_lastname" id="fathers_lastname" placeholder="Last Name"  />
                                                    <label for="lastname">Last Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input class="form-control" type="text" name="fathers_firstname" id="fathers_firstname" placeholder="First Name"  />
                                                    <label for="firstname">First Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating mb-2">
                                                    <input class="form-control" type="text" name="fathers_middlename" id="fathers_middlename" type="text" placeholder="Middle Name"  />
                                                    <label for="firstname">Middle Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control form-control-lg" name="fathers_phonenumber" id="fathers_phonenumber" pattern="\+63[0-9]{10}" maxlength="13" value="+63" required oninput="this.value = this.value.replace(/[^0-9+]/g, ''); if (this.value.length < 3) this.value = '+63';" onfocus="if(this.value === '') { this.value = '+63'; }" />
                                                    <label class="form-label" for="fathers_phonenumber">Contact Number</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="row g-2 mb-0">
                                            <h6 class="text-light-blue mb-0"><strong>Mother's Maiden Name</strong></h6>
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input class="form-control" type="text" id="mothers_lastname" name="mothers_lastname" placeholder="Last Name" />
                                                    <label for="mothers_lastname">Last Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input class="form-control" type="text" id="mothers_firstname" name="mothers_firstname" placeholder="First Name" />
                                                    <label for="mothers_firstname">First Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating mb-2">
                                                    <input class="form-control" type="text" id="mothers_middlename" name="mothers_middlename" placeholder="Middle Name" />
                                                    <label for="mothers_firstname">Middle Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control form-control-lg" name="mothers_phonenumber" id="mothers_phonenumber" pattern="\+63[0-9]{10}" maxlength="13" value="+63" required oninput="this.value = this.value.replace(/[^0-9+]/g, ''); if (this.value.length < 3) this.value = '+63';" onfocus="if(this.value === '') { this.value = '+63'; }" />
                                                    <label class="form-label" for="mothers_phonenumber">Contact Number</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="row g-2 mb-0">
                                            <h6 class="text-light-blue mb-0"><strong>Guardian's Name</strong></h6>
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input class="form-control" id="guardians_lastname" name="guardians_lastname" type="text" placeholder="Last Name"  />
                                                    <label for="guardians_lastname">Last Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating mb-0">
                                                    <input class="form-control" id="guardians_firstname" name="guardians_firstname" type="text" placeholder="First Name"  />
                                                    <label for="guardians_firstname">First Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating mb-2">
                                                    <input class="form-control" id="guardians_middlename" name="guardians_middlename" type="text" placeholder="Middle Name"  />
                                                    <label for="guardians_middlename">Middle Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control form-control-lg" name="guardians_phonenumber" id="guardians_phonenumber" pattern="\+63[0-9]{10}" maxlength="13" value="+63" required oninput="this.value = this.value.replace(/[^0-9+]/g, ''); if (this.value.length < 3) this.value = '+63';" onfocus="if(this.value === '') { this.value = '+63'; }" />
                                                    <label class="form-label" for="guardians_phonenumber">Contact Number</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="balik-aral">
                                        <div class="row g-2">
                                            <h5 class="text-light-blue"><strong>For Returning Learner (Balik-Aral) and Those Who Will Transfer/Move In</strong></h5>
                                            <div class="col-md">
                                                <div class="form-floating mb-2">
                                                    <select class="form-select" name="lastgradelevel" placeholder="Last Grade Level Completed">
                                                        <option selected disabled>Select from options</option>
                                                        <option value="Grade 11">Grade 11</option>
                                                        <option value="Grade 12">Grade 12</option>
                                                    </select>
                                                    <label id="lastgradelevelLabel">Last Grade Level Completed</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating mb-2">
                                                    <select class="form-select" name="lastschoolyear" placeholder="Last School Year Completed">
                                                        <option selected disabled>Select from options</option>
                                                        <option value="2016-2017">2016-2017</option>
                                                        <option value="2017-2018">2017-2018</option>
                                                        <option value="2018-2019">2018-2019</option>
                                                        <option value="2019-2020">2019-2020</option>
                                                        <option value="2020-2021">2020-2021</option>
                                                        <option value="2021-2022">2021-2022</option>
                                                        <option value="2022-2023">2022-2023</option>
                                                        <option value="2022-2023">2023-2024</option>
                                                    </select>
                                                    <label id="lastschoolyearLabel">Last School Year Completed</label>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-2">
                                                <input class="form-control" id="lastSchoolAttended" name="lastschoolattended" type="text" placeholder="Last School Attended" />
                                                <label for="lastSchoolAttended">Last School Attended</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="schoolID" name="schoolid" type="text" placeholder="School ID" maxlength="6" />
                                                <label for="schoolID">School ID</label>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="text-light-blue"><strong>For Learner's in Senior High School</strong></h5>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="semester" name="semester" placeholder="Semester">
                                            <option selected disabled>Select from options</option>
                                            <option value="1st Semester">1st Semester</option>
                                            <option value="2nd Semester">2nd Semester</option>
                                        </select>
                                        <label id="semester">Semester</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="track" name="track" placeholder="Track">
                                            <option selected disabled>Select from options</option>
                                            <option value="Accountancy and Business Management (ABM)">Accountancy and Business Management (ABM)</option>
                                            <option value="Technical Vocational Livelihood (TVL)">Technical Vocational Livelihood (TVL)</option>
                                            <option value="Humanities and Social Sciences (HUMSS)">Humanities and Social Sciences (HUMSS)</option>
                                            <option value="Science, Technology, Engineering and Mathematics (STEM)">Science, Technology, Engineering and Mathematics (STEM)</option>
                                        </select>
                                        <label id="track">Track</label>
                                    </div>
                                    <div class="form-floating mb-3" id="strand" style="display: none;">
                                        <select class="form-select" name="strand" placeholder="Strand">
                                            <option selected disabled>Select from options</option>
                                            <option value="Agri-Fishery Arts">Agri-Fishery Arts</option>
                                            <option value="Information and Communication Technology (ICT)">Information and Communication Technology (ICT)</option>
                                            <option value="Home Economics (HE)">Home Economics (HE)</option>
                                        </select>
                                        <label id="strandLabel"></label>
                                    </div>
                                    <!--
                                    <h6 class="text-light-blue"><strong>If school will implement other distance learning modalities aside from face-to-face instruction, what would you prefer for your child?</strong></h6>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="track" name="modality" placeholder="Learning Modality">
                                            <option selected disabled>Select from options</option>
                                            <option value="Modular (Print)">Modular (Print)</option>
                                            <option value="Modular (Digital)">Modular (Digital)</option>
                                            <option value="Online">Online</option>
                                            <option value="Educational Television">Educational Television</option>
                                            <option value="Radio-Based Instruction">Radio-Based Instruction</option>
                                            <option value="Homeschooling)">Homeschooling</option>
                                            <option value="Blended">Blended</option>
                                        </select>
                                        <label id="modality">Learning Modality</label>
                                    </div>
    -->
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-light-blue btn-lg" id="submitButton" type="submit">SUBMIT</button></div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-light-blue py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white"><b>Copyright &copy; Plaridel Integrated National High School | 2024</b></div>
                </div>
                <div class="col-auto">
                    <b>
                        <a class="link-light small" href="https://www.facebook.com/depedtayoplaridelinhs301258/" target="_blank"><i class="bi bi-facebook"></i> Facebook</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="https://www.facebook.com/messages/t/100188291792759" target="_blank"><i class="bi bi-messenger"></i> Messenger</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="mailto:301258@deped.gov.ph"><i class="bi bi-envelope"></i> Email</a>
                    </b>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('birthday').addEventListener('input', function(e) {
                var birthdate = new Date(e.target.value);
                var today = new Date();
                var age;
                if (!isNaN(birthdate.getTime())) { // Check if birthdate is a valid date
                    age = today.getFullYear() - birthdate.getFullYear();
                    var m = today.getMonth() - birthdate.getMonth();
                    if (m < 0 || (m === 0 && today.getDate() < birthdate.getDate())) {
                        age--;
                    }
                } else {
                    age = '';
                }
                document.getElementById('age').value = age;
            });
        });
    </script>
    <script>
        document.querySelector('[name="firstname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="middlename"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="lastname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="fathers_lastname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="fathers_firstname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="fathers_middlename"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="mothers_lastname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="mothers_firstname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="mothers_middlename"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="guardians_lastname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="guardians_firstname"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="guardians_middlename"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[0-9]/g, '');
        });
        document.querySelector('[name="reference"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        document.querySelector('[name="zipcode"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        document.querySelector('[name="schoolid"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        document.querySelector('[name="housenumber_text"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        document.querySelector('[name="city_text"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^a-zA-Z]/g, '');
        });
        document.querySelector('[name="country_text"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^a-zA-Z]/g, '');
        });
    </script>
    <script>
        document.getElementById('lrn').addEventListener('change', function() {
            if (this.value === 'Yes') {
                document.getElementById('referenceNumber').style.display = 'block';
                document.getElementById('referenceLabel').textContent = 'Learner Reference Number (LRN)';
            } else {
                document.getElementById('referenceNumber').style.display = 'none';
            }
        });

        document.getElementById('ip').addEventListener('change', function() {
            if (this.value === 'Yes') {
                document.getElementById('indigenousPeople').style.display = 'block';
                document.getElementById('indigenousLabel').textContent = 'If Yes, please specify:';
            } else {
                document.getElementById('indigenousPeople').style.display = 'none';
            }
        });

        document.getElementById('pantawid').addEventListener('change', function() {
            if (this.value === 'Yes') {
                document.getElementById('pantawidProgram').style.display = 'block';
                document.getElementById('pantawidLabel').textContent = 'If Yes, type the 4Ps Household ID Number below';
            } else {
                document.getElementById('pantawidProgram').style.display = 'none';
            }
        });

        document.getElementById('disability').addEventListener('change', function() {
            if (this.value === 'Yes') {
                document.getElementById('learnerdisability').style.display = 'block';
                document.getElementById('disabilityLabel').textContent = 'If Yes, specify the type of disability';
            } else {
                document.getElementById('learnerdisability').style.display = 'none';
            }
        });

        document.getElementById('balikaral').addEventListener('change', function() {
            if (this.value === 'Yes') {
                document.getElementById('balik-aral').style.display = 'block';
                document.getElementById('lastschoolyearLabel').textContent = 'Last School Year Completed';
                document.getElementById('lastgradelevelLabel').textContent = 'Last Grade Level Completed';
            } else {
                document.getElementById('balik-aral').style.display = 'none';
            }
        });

        document.getElementById('track').addEventListener('change', function() {
            if (this.value === 'Technical Vocational Livelihood (TVL)') {
                document.getElementById('strand').style.display = 'block';
                document.getElementById('strandLabel').textContent = 'Strand';
            } else {
                document.getElementById('strand').style.display = 'none';
            }
        });
    </script>
    <script src="js/ph-address-selector.js"></script>
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
    <script>
        $(document).ready(function() {
            $('#birthnum').keyup(function() {
                var val = this.value.replace(/[^a-zA-Z0-9]/g, '');
                var newVal = '';
                for (var i = 0; i < val.length; i++) {
                    if (i == 5 || i == 12) {
                        newVal += '-';
                    }
                    newVal += val[i];
                }
                this.value = newVal.toUpperCase();
            });
        });
    </script>
</body>

</html>