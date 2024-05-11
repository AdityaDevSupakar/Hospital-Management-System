<?php
$firstname = $_POST['firstname'] ?? '';
$middlename = $_POST['middlename'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$fname = $_POST['fname'] ?? '';
$fmiddlename = $_POST['fmiddlename'] ?? '';
$flastname = $_POST['flastname'] ?? '';
$mname = $_POST['mname'] ?? '';
$mmiddlename = $_POST['mmiddlename'] ?? '';
$mlname = $_POST['mlname'] ?? '';
$gender = $_POST['gender'] ?? '';
$date = $_POST['date'] ?? '';
$age = $_POST['age'] ?? '';
$code = $_POST['code'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$acode = $_POST['acode'] ?? '';
$amobile = $_POST['amobile'] ?? '';
$marital = $_POST['marital'] ?? '';
$disability = $_POST['disability'] ?? '';
$smoke = $_POST['smoke'] ?? '';
$village = $_POST['village'] ?? '';
$landmark = $_POST['landmark'] ?? '';
$post = $_POST['post'] ?? '';
$pin = $_POST['pin'] ?? '';
$dist = $_POST['dist'] ?? '';
$state = $_POST['state'] ?? '';
$relation = $_POST['relation'] ?? '';
$ename = $_POST['ename'] ?? '';
$ecode = $_POST['ecode'] ?? '';
$econtact = $_POST['econtact'] ?? '';
$evill = $_POST['evill'] ?? '';
$elmark = $_POST['elmark'] ?? '';
$epos = $_POST['epos'] ?? '';
$epin = $_POST['epin'] ?? '';
$edist = $_POST['edist'] ?? '';
$estate = $_POST['estate'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$conn = new mysqli('localhost', 'root', '', 'hms');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    if ($landmark === null) {
        $landmark = 'banda';
    }

    $stmt = $conn->prepare("INSERT INTO registration(firstname, middlename, lastname, fname, fmiddlename, flastname, mname, mmiddlename, mlastname, gender, date, age, code, mobile, acode, amobile, marital, disability, smoke, village, landmark, post, pin, dist, state, ename, ecode, econtact, erelation, evill, elmark, epos, epin, edist, estate, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die('Error in statement preparation: ' . $conn->error);
    }

    $stmt->bind_param("ssssssssssiiiiiissssssisssiissssisssss", $firstname, $middlename, $lastname, $fname, $fmiddlename, $flastname, $mlastname, $mmiddlename, $mlname, $gender, $date, $age, $code, $mobile, $acode, $amobile, $marital, $disability, $smoke, $village, $landmark, $post, $pin, $dist, $state, $ename, $ecode, $econtact, $relation, $evill, $elmark, $epos, $epin, $edist, $estate, $username, $password);

    if ($stmt->execute()) {
        echo "Registration Successfully.....";
    } else {
        die('Failed To Send The Data To Database: ' . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>