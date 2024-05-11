<?php
$firstname = $_POST['firstname'] ?? '';
$middlename = $_POST['middlename'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$country_code = $_POST['country_code'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$email = $_POST['email'] ?? '';
$gender = $_POST['gender'] ?? '';
$problems = $_POST['problems'] ?? '';

$conn = new mysqli('localhost', 'root', '', 'hms');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    
    $stmt = $conn->prepare("INSERT INTO contact_us (firstname, middlename, lastname, country_code, mobile, email, gender, problems) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die('Something Is Going Wrong To Send The Data. Probably That Error Will Be This: ' . $conn->error);
    }

    $stmt->bind_param("ssssisss", $firstname, $middlename, $lastname, $country_code, $mobile, $email, $gender, $problems);

    if ($stmt->execute()) {
        echo "Your Response Is Uploaded Successfully............................." . "<br>"."<br>". "Thank You For Sending Your Valuable Response About Our Hospital's Management.";
        echo "This Helps Us To Improve." . "<br>" . "Your Response Is Kept Personally And Never Told To Another, But We Will Try To Solve That As Soon As Possible.";
    } else {
        die('Failed To Send The Data To Database Because Of ' . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>