<?php
session_start();
error_reporting(0);

include 'conn.php';

require('fpdf/fpdf.php');

$id = $_GET['id'];
$query = "SELECT * FROM enrollment WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id); // "i" indicates that $id is an integer

if ($stmt->execute()) {
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    class GenerateForm extends FPDF
    {

        // Generate the Barangay Clearance
        function generateClearance($data)
        {
            $this->Image('Form1.jpg', 0, 0, 210, 300);
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(25, 25.8);
            $this->MultiCell(0, 30, strtoupper($data["schoolyear"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(33, 31);
            $this->MultiCell(0, 30, strtoupper($data["gradelevel"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(102, 31);
            $this->MultiCell(0, 30, strtoupper($data["lrn"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(148, 56.3);
            $this->MultiCell(0, 30, strtoupper($data["reference"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(67.8, 55.5);
            $this->MultiCell(0, 30, strtoupper($data["birthnumber"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(102, 77);
            $this->MultiCell(0, 30, strtoupper($data["sex"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(127.5, 77);
            $this->MultiCell(0, 30, strtoupper($data["age"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(160, 31);
            $this->MultiCell(0, 30, strtoupper($data["balikaral"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(17.8, 68);
            $this->MultiCell(0, 30, strtoupper($data["lastname"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(17.8, 78.5);
            $this->MultiCell(0, 30, strtoupper($data["firstname"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(17.8, 88.5);
            $this->MultiCell(0, 30, strtoupper($data["middlename"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(17.8, 98.5);
            $this->MultiCell(0, 30, strtoupper($data["extension"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(102, 68);
            $this->MultiCell(0, 30, date('m/d/Y', strtotime($data["birthday"])), 0, 'L');
            $this->SetFont('Arial', 'B', 9);
            $this->SetXY(142, 66);
            $this->MultiCell(0, 30, strtoupper($data["placeofbirth"]), 0, 'L');
            $this->SetFont('Arial', 'B', 10);
            $this->SetXY(142, 77);
            $this->MultiCell(0, 30, strtoupper($data["mother_tongue"]), 0, 'L');
            $this->SetFont('Arial', 'B', 10);
            $this->SetXY(105, 88.5);
            $this->MultiCell(0, 30, strtoupper($data["ip"]), 0, 'L');
            $this->SetFont('Arial', 'B', 10);
            $this->SetXY(160, 87.7);
            $this->MultiCell(0, 30, strtoupper($data["indigenous"]), 0, 'L');
            $this->SetFont('Arial', 'B', 10);
            $this->SetXY(142, 93.5);
            $this->MultiCell(0, 30, strtoupper($data["pantawid"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(106, 102.5);
            $this->MultiCell(0, 30, strtoupper($data["pantawidProgram"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(70, 110.8);
            $this->MultiCell(0, 30, strtoupper($data["disability"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(70, 117.5);
            $this->MultiCell(0, 30, strtoupper($data["learnerdisability"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(21, 158);
            $this->MultiCell(0, 30, strtoupper($data["housenumber_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(60.5, 158);
            $this->MultiCell(0, 30, strtoupper($data["streetname_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(124, 158);
            $this->MultiCell(0, 30, strtoupper($data["barangay_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(21, 170);
            $this->MultiCell(0, 30, strtoupper($data["city_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(71.5, 170);
            $this->MultiCell(0, 30, strtoupper($data["province_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(123.5, 170);
            $this->MultiCell(0, 30, strtoupper($data["country_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(163.7, 170);
            $this->MultiCell(0, 30, strtoupper($data["zipcode"]), 0, 'L');
            $this->SetXY(21, 188.5);
            $this->MultiCell(0, 30, strtoupper($data["permanent_housenumber_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(60.5, 188.5);
            $this->MultiCell(0, 30, strtoupper($data["permanent_streetname_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(124, 188.5);
            $this->MultiCell(0, 30, strtoupper($data["barangay_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(21, 200);
            $this->MultiCell(0, 30, strtoupper($data["permanent_city_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(71.5, 200);
            $this->MultiCell(0, 30, strtoupper($data["permanent_province_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(123.5, 200);
            $this->MultiCell(0, 30, strtoupper($data["permanent_country_text"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(163.7, 200);
            $this->MultiCell(0, 30, strtoupper($data["permanent_zipcode"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(20.5, 225.5);
            $this->MultiCell(0, 30, strtoupper($data["fathers_lastname"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(63.1, 225.5);
            $this->MultiCell(0, 30, strtoupper($data["fathers_firstname"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(105, 225.5);
            $this->MultiCell(0, 30, strtoupper($data["fathers_middlename"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(149, 225.5);
            $this->MultiCell(0, 30, strtoupper($data["fathers_phonenumber"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(20.5, 242.5);
            $this->MultiCell(0, 30, strtoupper($data["mothers_lastname"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(63.1, 242.5);
            $this->MultiCell(0, 30, strtoupper($data["mothers_firstname"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(105, 242.5);
            $this->MultiCell(0, 30, strtoupper($data["mothers_middlename"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(149, 242.5);
            $this->MultiCell(0, 30, strtoupper($data["mothers_phonenumber"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(20.5, 259.5);
            $this->Cell(0, 30, strtoupper($data["mothers_lastname"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(63.1, 259.5);
            $this->MultiCell(0, 30, strtoupper($data["mothers_firstname"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(105, 259.5);
            $this->MultiCell(0, 30, strtoupper($data["mothers_middlename"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(149, 259.5);
            $this->MultiCell(0, 30, strtoupper($data["mothers_phonenumber"]), 0, 'L');

            // Add a new page for the second part of the form
            $this->AddPage();
            // Set the second part of the form as the background
            $this->Image('Form2.jpg', 0, 0, 210, 300);
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(65, 11.8);
            $this->MultiCell(0, 30, strtoupper($data["lastgradelevel"]), 0, 'L');
            $this->SetFont('Arial', 'B', 12);
            $this->SetXY(157, 11.8);
            $this->MultiCell(0, 30, strtoupper($data["lastschoolyear"]), 0, 'L');
            $this->SetFont('Arial', 'B', 14);
            $this->SetXY(165, 21.5);
            $this->MultiCell(0, 30, strtoupper($data["schoolid"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(44.5, 21);
            $this->MultiCell(0, 30, strtoupper($data["lastschoolattended"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(35, 37.8);
            $this->MultiCell(0, 30, strtoupper($data["semester"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(83.8, 37.2);
            $this->MultiCell(0, 30, strtoupper($data["track"]), 0, 'L');
            $this->SetFont('Arial', 'B', 8);
            $this->SetXY(84, 41.8);
            $this->MultiCell(0, 30, strtoupper($data["strand"]), 0, 'L');
            $this->SetFont('Arial', 'B', 14);
            $currentDate = date('m/d/Y');
            $this->SetXY(146, 155);
            $this->MultiCell(0, 30, $currentDate, 0, 'L');


            // Create a filename
            $filename = $data["firstname"] . " " . $data["middlename"] . " " . $data["lastname"] . " - " .  "Plaridel INHS Enrollment Form.pdf";
            // Sanitize the filename to remove any invalid characters
            $filename = preg_replace('/[^a-zA-Z0-9 \-\.\_]/', '', $filename);
            // Output PDF with the given filename
            $this->Output('I', $filename);
        }
    }
}

// Usage example
$pdf = new GenerateForm('P', 'mm', 'A4');
$pdf->SetMargins(0, 0, 0    );
$title = $data["firstname"] . " " . $data["middlename"] . " " . $data["lastname"] . " | " . " Plaridel INHS Enrollment Form";
$pdf->SetTitle($title);
$pdf->SetAutoPageBreak(false);
$pdf->AliasNbPages();
$pdf->AddPage();

// Generate the Barangay Clearance with sample data
$pdf->generateClearance($data);
?>
