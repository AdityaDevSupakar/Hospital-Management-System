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
$book_date = $_POST['book_date'] ?? '';
$book_day = $_POST['book_day'] ?? '';
$diseases_era = $_POST['diseases_era'] ?? '';
$room = $_POST['room'] ?? '';
$condi = $_POST['condi'] ?? '';
$remark = $_POST['remark'] ?? '';

$conn = new mysqli('localhost', 'root', '', 'hms');
if ($conn->connect_error) {
    die('Failed To Send The Discharged Data: ' . $conn->connect_error);
} else {

    $stmt = $conn->prepare("INSERT INTO new_discharge(p_firstname, p_middlename, p_lastname, f_firstname, f_middlename, f_lastname, m_firstname, m_middlename, m_lastname, birth, p_age, p_gender, m_code, p_mobile, village, mark, post, pin, dist, state, book_date, book_day, diseases_era, room, condi, remark) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die('Error in statement preparation: ' . $conn->error);
    }

    $stmt->bind_param("ssssssssssississsisssssiss", $p_firstname, $p_middlename, $p_lastname, $f_firstname, $f_middlename, $f_lastname, $m_firstname, $m_middlename, $m_lastname, $birth, $p_age, $p_gender, $m_code, $p_mobile, $village, $mark, $post, $pin, $dist, $state, $book_date, $book_day, $diseases_era, $condi, $room, $remark);

    if ($stmt->execute()) {
        echo "One Patient Has Successfully Discharged.....";
    } else {
        die('Failed To Discharged The Patient:' . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>