<?php
session_start();
$_SESSION['formSubmitted'] = true;

date_default_timezone_set('Asia/Manila');

if (empty($_POST['schoolyear']) || empty($_POST['gradelevel']) || empty($_POST['firstname']) || empty($_POST['lastname'])) {
  header('Location: index.php');
} else {

  $schoolyear = $_POST['schoolyear'];
  $gradelevel = $_POST['gradelevel'];
  $lrn = $_POST['lrn'];
  $reference = $_POST['reference'];
  $balikaral = $_POST['balikaral'];
  $transfer = $_POST['transfer'];
  $birthnumber = $_POST['birthnumber'];
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $extension = $_POST['extension'];
  $birthday = $_POST['birthday'];
  $age = $_POST['age'];
  $mother_tongue = $_POST['mother_tongue'];
  $sex = $_POST['sex'];
  $placeofbirth = $_POST['placeofbirth'];
  $ip = $_POST['ip'];
  $indigenous = $_POST['indigenous'];
  $pantawid = $_POST['pantawid'];
  $pantawidProgram = $_POST['pantawidProgram'];
  $disability = $_POST['disability'];
  $learnerdisability = $_POST['learnerdisability'];
  $housenumber_text = $_POST['housenumber_text'];
  $streetname_text = $_POST['streetname_text'];
  $barangay_text = $_POST['barangay_text'];
  $city_text = $_POST['city_text'];
  $province_text = $_POST['province_text'];
  $country_text = $_POST['country_text'];
  $zipcode = $_POST['zipcode'];
  $permanent_housenumber_text = $_POST['permanent_housenumber_text'];
  $permanent_streetname_text = $_POST['permanent_streetname_text'];
  $permanent_barangay_text = $_POST['permanent_barangay_text'];
  $permanent_city_text = $_POST['permanent_city_text'];
  $permanent_province_text = $_POST['permanent_province_text'];
  $permanent_country_text = $_POST['permanent_country_text'];
  $permanent_zipcode = $_POST['permanent_zipcode'];
  $fathers_lastname = $_POST['fathers_lastname'];
  $fathers_firstname = $_POST['fathers_firstname'];
  $fathers_middlename = $_POST['fathers_middlename'];
  $fathers_phonenumber = $_POST['fathers_phonenumber'];
  $mothers_lastname = $_POST['mothers_lastname'];
  $mothers_firstname = $_POST['mothers_firstname'];
  $mothers_middlename = $_POST['mothers_middlename'];
  $mothers_phonenumber = $_POST['mothers_phonenumber'];
  $guardians_lastname = $_POST['guardians_lastname'];
  $guardians_firstname = $_POST['guardians_firstname'];
  $guardians_middlename = $_POST['guardians_middlename'];
  $guardians_phonenumber = $_POST['guardians_phonenumber'];
  $lastgradelevel = $_POST['lastgradelevel'];
  $lastschoolyear = $_POST['lastschoolyear'];
  $lastschoolattended = $_POST['lastschoolattended'];
  $schoolid = $_POST['schoolid'];
  $semester = $_POST['semester'];
  $track = $_POST['track'];
  $strand = $_POST['strand'];
  $modality = $_POST['modality'];
  $date = date("d/m/Y");
  $time = date("h:i:sa");
  

  include 'conn.php';
  mysqli_query($conn, "INSERT INTO enrollment(schoolyear, gradelevel, lrn, reference, balikaral, transfer, birthnumber, lastname, firstname, middlename, extension, birthday, age, mother_tongue, sex, placeofbirth, ip, indigenous, pantawid, pantawidProgram, disability, learnerdisability, housenumber_text, streetname_text, barangay_text, city_text, province_text, country_text, zipcode, permanent_housenumber_text, permanent_streetname_text, permanent_barangay_text, permanent_city_text, permanent_province_text, permanent_country_text, permanent_zipcode, fathers_lastname, fathers_firstname, fathers_middlename, fathers_phonenumber, mothers_lastname, mothers_firstname, mothers_middlename, mothers_phonenumber, guardians_lastname, guardians_firstname, guardians_middlename, guardians_phonenumber, lastgradelevel, lastschoolyear, lastschoolattended, schoolid, semester, track, strand, modality, date, time)VALUES('$schoolyear', '$gradelevel', '$lrn', '$reference', '$balikaral', '$transfer', '$birthnumber', '$lastname', '$firstname', '$middlename', '$extension', '$birthday', '$age', '$mother_tongue', '$sex', '$placeofbirth', '$ip', '$indigenous', '$pantawid', '$pantawidProgram', '$disability', '$learnerdisability', '$housenumber_text', '$streetname_text', '$barangay_text', '$city_text', '$province_text', '$country_text', '$zipcode', '$permanent_housenumber_text', '$permanent_streetname_text', '$permanent_barangay_text', '$permanent_city_text', '$permanent_province_text', '$permanent_country_text', '$permanent_zipcode', '$fathers_lastname', '$fathers_firstname', '$fathers_middlename', '$fathers_phonenumber', '$mothers_lastname', '$mothers_firstname', '$mothers_middlename', '$mothers_phonenumber', '$guardians_lastname', '$guardians_firstname', '$guardians_middlename', '$guardians_phonenumber', '$lastgradelevel', '$lastschoolyear', '$lastschoolattended', '$schoolid', '$semester', '$track', '$strand', '$modality', '$date', '$time')") or die('Query Error');

  header('Location: success.php');
}
?>