<?php
$con = mysqli_connect("localhost","root","","hms");
// Check connection
if (!$con) {
    die("Sorry Doctor there is some error occured to fetch your data." . $conn->connect_error);
}

// Get username and password from user input (you should validate and sanitize these inputs)
$doctor_id = isset($_POST['username']) ? $_POST['username'] : null;
$query = "select * from new_slot";
$result = mysqli_query($con,$query);

function display_data(){
    global $con;
    $query = "SELECT * FROM new_slot WHERE doctor_id = ?";
    $result = mysqli_query($con,$query);
    return $result;
    $result = display_data();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PATIENTS-LISTS</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        background-attachment: fixed;
        background-color: cyan;
    }

    .up {
        min-width: 100vw;
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
        min-height: 95vh;

        background-size: cover;

    }

    th,
    td {
        border: 3px solid black;
        border-collapse: collapse;
        width: 13vw;
        font-family: Verdana;
    }

    #b1 {
        width: 4.7vw;
        height: 6vh;
        background-color: blue;
        color: white;
        border-radius: 9px;
        margin-left: 2px;
    }

    #b1:active {
        background-color: green;
        color: red;
    }

    #b2 {
        width: 4.7vw;
        height: 6vh;
        background-color: red;
        color: white;
        border-radius: 9px;
        margin-left: 2px;
    }

    #b2:active {
        color: blue;
    }
    </style>
</head>

<body>
    <div class="up">
        <a href="http://localhost/HMS/HMS%20Login.html">
            <img src="Photos/Back Logo.gif" id="logo">
        </a>
        <a href="http://localhost/HMS/HMS%20Login.html" id="paragraph"><b><i>GO BACK</i></b></a>
        <h1 style="font-family:Georgia, 'Times New Roman';margin-left:85px;color: rgb(59, 108, 220);">
            <u>WELCOME DOCTOR THE LIST OF PATIENTS
                UNDER YOU :</u>
        </h1>
    </div>
    <div class="middle">

        <table class="table table-bordered text-center">
            <tr class="bg-dark text-white">
                <th>S.n</th>
                <th>UserName</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Birth</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Booked Date</th>
                <th>Booked Day</th>
                <th>Diseases Era</th>
            </tr>
            <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <td><?php echo $row['index']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['p_firstname']; ?> <?php echo $row['p_middlename']; ?>
                    <?php echo $row['p_lastname'];?>
                </td>
                <td><?php echo $row['f_firstname']; ?> <?php echo $row['f_middlename']; ?>
                    <?php echo $row['f_lastname']; ?></td>
                <td><?php echo $row['m_firstname']; ?> <?php echo $row['m_middlename']; ?>
                    <?php echo $row['m_lastname']; ?> </td>
                <td><?php echo $row['birth']; ?></td>
                <td><?php echo $row['p_age']; ?> Years</td>
                <td><?php echo $row['p_gender']; ?></td>
                <td><?php echo $row['book_date']; ?></td>
                <td><?php echo $row['book_day']; ?></td>
                <td><?php echo $row['diseases_era']; ?></td>
            </tr>
            <?php 
              }
            ?>
        </table>
    </div>
</body>

</html>