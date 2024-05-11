<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DATA</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        background-attachment: fixed;
        background-color: rgb(84, 176, 246);
        overflow: hidden;

    }

    .up {
        max-width: 100vw;
        min-height: 5vh;
        display: flex;
    }

    #logo {
        max-height: 27px;
        max-width: 35px;
    }

    #paragraph {
        color: yellow;
        font-family: 'Arial Narrow Bold';
        padding-top: 3px;
        padding-left: 2px;
    }

    #paragraph:hover {
        font-family: 'Courier New';
        font-size: larger
    }

    .middle {
        max-width: 100vw;
        min-height: 90vh;
        display: flex;
        font-family: 'Gill Sans';
        font-size: larger;
        font-weight: 700;
    }

    #table1 {
        padding-bottom: 65px;
        padding-left: 135px;
    }

    #table2 {
        padding-bottom: 235px;
        padding-left: 135px;
    }
    </style>
</head>

<body>
    <div class="up">
        <a href="http://localhost/HMS/USER%20PANEL.html">
            <img src="Photos/Back Logo.gif" id="logo">
        </a>
        <a href="http://localhost/HMS/USER%20PANEL.html" id="paragraph"><b><i>GO BACK</i></b></a>
        <h1 style="font-family:Georgia, 'Times New Roman';margin-left:235px;color:navy;"><u>YOUR BOOKING DETAILS
                ARE:-</u></h1>
    </div>
    <div class="middle">
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from user input (you should validate and sanitize these inputs)
$user = $_POST['username'];
$pass = $_POST['password'];

// Verify username and password using prepared statement
$stmt = $conn->prepare("SELECT * FROM registration WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // User is authenticated, proceed to retrieve data based on ID
    $id = $_POST['username']; // Assuming the user provides the ID as input

    // SQL query to retrieve data based on the entered ID using prepared statement
    $stmt = $conn->prepare("SELECT * FROM registration WHERE username = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
?>
        <table style="padding-left:25px;" id="table1">
            <?php 
                      if ($result->num_rows > 0) {
                          // Output data of each row
                           while ($row = $result->fetch_assoc()) {
                ?>
            <tr>
                <td>
                    <h2><u>PERSONAL</u></h2>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <h2><u>DETAILS</u></h2>
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td>
                    <label for="name"><b>USER ID</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["user_id"] ;?></td>
            </tr><br>
            <tr>
                <td>
                    <label for="pname"><b>PATIENT's NAME</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["p_firstname"] ;?> <?php echo $row["p_middlename"] ;?>
                    <?php echo $row["p_lastname"] ;?></td>
            </tr><br>
            <tr>
                <td>
                    <label for="fname"><b>FATHER's NAME</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["f_firstname"] ;?> <?php echo $row["f_middlename"] ;?>
                    <?php echo $row["f_lastname"] ;?></td>
            </tr><br>
            <tr>
                <td>
                    <label for="mname"><b>MOTHER's NAME</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["m_firstname"] ;?> <?php echo $row["m_middlename"] ;?>
                    <?php echo $row["m_lastname"] ;?></td>
            </tr><br>
            <tr>
                <td>
                    <label for="birth"><b>DATE OF BIRTH</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["p_birth"] ;?></td>
            </tr><br>
            <tr>
                <td>
                    <label for="age"><b>CURRENT AGE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["p_age"] ;?></td>
            </tr><br>
            <tr>
                <td>
                    <label for="gender"><b>GENDER</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["p_gender"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="mobile"><b>MOBILE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["m_code"] ;?> <?php echo $row["p_mobile"] ;?></td>
            </tr>
        </table>
        <table id="table2">
            <tr>
                <td>
                    <h2><u>BOOKING</u></h2>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <h2><u>DETAILS</u></h2>
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td>
                    <label for="bookdate"><b>BOOKING DATE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["book_date"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="bookday"><b>BOOKING DAY</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["book_day"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="era"><b>DISEASES ERA</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["diseases_era"] ;?> </td>
            </tr>
            <tr>
                <td>
                    <label for="doctortype"><b>DOCTOR TYPE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["doctor_type"] ;?></td>
            </tr>
            <?php 
              }
            ?>
        </table>
    </div>
    <?php
           }
           else {
              echo "No results found for User-ID: " . "<br>" . $id;
           }
           }
           else {
              echo "Invalid Username or Password";
           }

           // Close the connection
           $stmt->close();
           $conn->close();
        ?>
    </div>
</body>

</html>