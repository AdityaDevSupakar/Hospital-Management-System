<?php 
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Failed to connect with database: " . $conn->connect_error);
}

// Get the user ID from the user input
$userID = $_POST['username']; // Adjust this based on your form input method (e.g., $_GET or $_REQUEST)

// Check if the user ID exists in the database
$checkQuery = "SELECT * FROM registration WHERE username = '$userID'";
$checkResult = $conn->query($checkQuery);

if ($checkResult->num_rows > 0) {
    // User ID exists, proceed with the insert operation

    // Get other information from the user input
    $user_id = $_POST['username'];
    $p_firstname = $_POST['p_firstname'];
    $p_middlename = $_POST['p_middlename'];
    $p_lastname = $_POST['p_lastname'];
    $f_firstname = $_POST['f_firstname'];
    $f_middlename = $_POST['f_middlename'];
    $f_lastname = $_POST['f_lastname'];
    $m_firstname = $_POST['m_firstname'];
    $m_middlename = $_POST['m_middlename'];
    $m_lastname = $_POST['m_lastname'];
    $p_birth = $_POST['birth'];
    $p_age = $_POST['p_age'];
    $p_gender = $_POST['p_gender'];
    $m_code = $_POST['m_code'];
    $p_mobile = $_POST['p_mobile'];
    $book_date = $_POST['book_date'];
    $book_day = $_POST['book_day'];
    $diseases_era = $_POST['diseases_era'];
    $doctor_type = $_POST['doctor_type'];

    // Insert data into the database
    $insertQuery = "INSERT INTO registration (p_firstname, p_middlename, p_lastname, f_firstname, f_middlename, f_lastname, m_firstname, m_middlename, m_lastname, p_birth, p_age, p_gender, m_code, p_mobile, book_date, book_day, diseases_era, doctor_type) VALUES ('$p_firstname','$p_middlename','$p_lastname','$f_firstname','$f_middlename','$f_lastname','$m_firstname','$m_middlename','$m_lastname','$p_birth','$p_age','$p_gender','$m_code','$p_mobile','$book_date','$book_day','$diseases_era','$doctor_type')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "Your Slot Is Booked Successfully"."<br>"."Please Consult With Staff For Knowing Other Details.";
    } else {
        echo "Some Error Occured During Inserting Data as ". "<br>" . $conn->error;
    }
} else {
    // User ID does not exist in the database
    echo "User ID not found in the database";
}

// Close the database connection
$conn->close();
?>