<?php
$con = mysqli_connect("localhost","root","","hms");
if(!$con){
   die("Sorry Something Went Wrong To Connect With Database");
}
$query = "select * from new_slot";
$result = mysqli_query($con,$query);

function display_data(){
    global $con;
    $query = "select * from new_slot";
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
    <title>USER-MANIPULATION</title>
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
        min-height: 90vh;
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
        <a href="http://localhost/HMS/STAFF_PANEL.html">
            <img src="Photos/Back Logo.gif" id="logo">
        </a>
        <a href="http://localhost/HMS/STAFF_PANEL.html" id="paragraph"><b><i>GO BACK</i></b></a>
        <h1 style="font-family:Georgia, 'Times New Roman';margin-left:85px;"><u>THIS IS THE LIST OF PATIENTS IN
                OUR HOSPITAL :</u></h1>
    </div>
    <div class="middle">
        <br>
        <table class="table table-bordered text-center">
            <tr class="bg-dark text-white">
                <th>UserName</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Birth</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Mobile</th>
                <th>Village</th>
                <th>Landmark</th>
                <th>Post</th>
                <th>Pin</th>
                <th>Dist</th>
                <th>State</th>
                <th>Book Date</th>
                <th>Book Day</th>
                <th>Diseases Era</th>
                <th>Doctor Type</th>
                <th>Doctor Name</th>
                <th>Doctor Id</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['p_firstname']; ?> <?php echo $row['p_middlename']; ?>
                    <?php echo $row['p_lastname'];?>
                </td>
                <td><?php echo $row['f_firstname']; ?> <?php echo $row['f_middlename']; ?>
                    <?php echo $row['f_lastname']; ?>
                <td><?php echo $row['m_firstname']; ?> <?php echo $row['m_middlename']; ?>
                    <?php echo $row['m_lastname']; ?> </td>
                <td><?php echo $row['birth']; ?></td>
                <td><?php echo $row['p_age']; ?></td>
                <td><?php echo $row['p_gender']; ?></td>
                <td><?php echo $row['m_code']; ?> <?php echo $row['p_mobile']; ?></td>
                <td><?php echo $row['village']; ?></td>
                <td><?php echo $row['mark']; ?></td>
                <td><?php echo $row['post']; ?></td>
                <td><?php echo $row['pin']; ?></td>
                <td><?php echo $row['dist']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['book_date']; ?></td>
                <td><?php echo $row['book_day']; ?></td>
                <td><?php echo $row['diseases_era']; ?></td>
                <td><?php echo $row['doctor_type']; ?></td>
                <td><?php echo $row['doctor_name']; ?></td>
                <td><?php echo $row['doctor_id']; ?></td>
                <td><button href="#" type="button" id="b1">Edit</button></td>
                <td><button href="#" type="button" id="b2">Delete</button></td>
            </tr>
            <?php
                }

                ?>
        </table>
    </div>
</body>

</html>