<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "bubt_project";
$conn = mysqli_connect("localhost","root","","bubt_project");

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sscPassingYear = $_POST['sscPassingYear'];
$sscRoll = $_POST['sscRoll'];
$sscRegistration = $_POST['sscRegistration'];
$sscBoard = $_POST['sscBoard'];

$hscPassingYear = $_POST['hscPassingYear'];
$hscRoll = $_POST['hscRoll'];
$hscRegistration = $_POST['hscRegistration'];
$hscBoard = $_POST['hscBoard'];

$degreeName = $_POST['degreeName'];
$description = $_POST['description'];
$institutionName = $_POST['institutionName'];
$academicBoard = $_POST['academicBoard'];
$grade = $_POST['grade'];
$year = $_POST['year'];

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$fatherName = $_POST['fatherName'];
$motherName = $_POST['motherName'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$maritalStatus = $_POST['maritalStatus'];
$religion = $_POST['religion'];
$nationality = $_POST['nationality'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];


$image = $_FILES['image']['name'];
$tempImage = $_FILES['image']['tmp_name'];
$targetPath = "../uploads/" . $image;
move_uploaded_file($tempImage, $targetPath);


$sql = "INSERT INTO admit_bsc (ssc_passing_year, ssc_roll, ssc_registration, ssc_board, hsc_passing_year, hsc_roll, hsc_registration, hsc_board, degree_name, description, institution_name, academic_board, grade, year, first_name, last_name, father_name, mother_name, gender, dob, marital_status, religion, nationality, phone, address, email, image)
        VALUES ('$sscPassingYear', '$sscRoll', '$sscRegistration', '$sscBoard', '$hscPassingYear', '$hscRoll', '$hscRegistration', '$hscBoard', '$degreeName', '$description', '$institutionName', '$academicBoard', '$grade', '$year', '$firstName', '$lastName', '$fatherName', '$motherName', '$gender', '$dob', '$maritalStatus', '$religion', '$nationality', '$phone', '$address', '$email', '$image')";

if ($conn->query($sql) === TRUE) {
    header("Location: apply_done.php");
    exit();            
         
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>
