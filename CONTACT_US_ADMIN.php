<?php
$con = mysqli_connect("localhost","root","","hms");
if(!$con){
   die("Sorry Something Went Wrong To Connect With Database");
}
$query = "select * from contact_us";
$result = mysqli_query($con,$query);

function display_data(){
    global $con;
    $query = "select * from contact_us";
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
    <title>REPORTS ABOUT HOSPITAL</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        background-attachment: fixed;
        overflow-x: hidden;
    }

    .up {
        max-width: 100vw;
        min-height: 5vh;
        display: flex;
        background-color: rgb(70, 159, 255);
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
        background-color: cyan;
        background-size: cover;

    }

    th,
    td {
        border: 3px solid black;
        border-collapse: collapse;
        width: 5vw;
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
        <h1 style="font-family:Georgia, 'Times New Roman';margin-left:45px;"><u>WELCOME ADMIN, THE PROBLEMS SUBMITTED BY
                VISITORS.</u></h1>
    </div>
    <div class="middle">
        <br>
        <table class="table table-bordered text-center">
            <tr class="bg-dark text-white">
                <th>S.N</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>Status</th>
                <th>Visited_Times</th>
                <th>About</th>
                <th>Date and Time</th>
                <th>Problems</th>

            </tr>
            <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <td><?php echo $row['Sr_No']; ?></td>
                <td><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['lastname'];?>
                </td>
                <td><?php echo $row['country_code']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['problems']; ?></td>
                <td><button href="#" type="button" id="b2">Delete</button></td>
            </tr>
            <?php
                }

                ?>
        </table>
    </div>
</body>

</html>