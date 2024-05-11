<?php
$p_firstname = $_POST['p_firstname'] ?? '';
$p_middlename = $_POST['p_middlename'] ?? '';
$p_lastname = $_POST['p_lastname'] ?? '';
$f_firstname = $_POST['f_firstname'] ?? '';
$f_middlename = $_POST['f_middlename'] ?? '';
$f_lastname = $_POST['f_lastname'] ?? '';
$m_firstname = $_POST['m_firstname'] ?? '';
$m_middlename = $_POST['m_middlename'] ?? '';
$m_lastname = $_POST['m_lastname'] ?? '';
$birth = $_POST['birth'] ?? '';
$p_age = $_POST['p_age'] ?? '';
$p_gender = $_POST['p_gender'] ?? '';
$m_code = $_POST['m_code'] ?? '';
$p_mobile = $_POST['p_mobile'] ?? '';
$village = $_POST['village'] ?? '';
$mark = $_POST['mark'] ?? '';
$post = $_POST['post'] ?? '';
$pin = $_POST['pin'] ?? '';
$dist = $_POST['dist'] ?? '';
$state = $_POST['state'] ?? '';
$username = $_POST['username'] ?? '';
$book_date = $_POST['book_date'] ?? '';
$book_day = $_POST['book_day'] ?? '';
$diseases_era = $_POST['diseases_era'] ?? '';
$doctor_type = $_POST['doctor_type'] ?? '';
$doctor_name = $_POST['doctor_name'] ?? '';
$doctor_id = $_POST['doctor_id'] ?? '';

$conn = new mysqli('localhost', 'root', '', 'hms');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {

    $stmt = $conn->prepare("INSERT INTO new_slot(p_firstname, p_middlename, p_lastname, f_firstname, f_middlename, f_lastname, m_firstname, m_middlename, m_lastname, birth, p_age, p_gender, m_code, p_mobile, village, mark, post, pin, dist, state, username, book_date, book_day, diseases_era, doctor_type, doctor_name, doctor_id) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die('Error in statement preparation: ' . $conn->error);
    }

    $stmt->bind_param("ssssssssssisiisssisssssssss", $p_firstname, $p_middlename, $p_lastname, $f_firstname, $f_middlename, $f_lastname, $m_firstname, $m_middlename, $m_lastname, $birth, $p_age, $p_gender, $m_code, $p_mobile, $village, $mark, $post, $pin, $dist, $state, $username, $book_date, $book_day, $diseases_era, $doctor_type, $doctor_name, $doctor_id);

    if ($stmt->execute()) {
        echo "Registration Successfully.....";
    } else {
        die('Failed To Book Your Slot.'.'<br>'.'Please Try Again'. $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>