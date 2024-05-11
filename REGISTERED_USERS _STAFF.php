<?php
$con = mysqli_connect("localhost","root","","hms");
if(!$con){
   die("Sorry Something Went Wrong To Connect With Database");
}
$query = "select * from registration";
$result = mysqli_query($con,$query);

function display_data(){
    global $con;
    $query = "select * from registration";
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
        <a href="http://localhost/HMS/ADMIN_PANEL.html">
            <img src="Photos/Back Logo.gif" id="logo">
        </a>
        <a href="http://localhost/HMS/ADMIN_PANEL.html" id="paragraph"><b><i>GO BACK</i></b></a>
        <h1 style="font-family:Georgia, 'Times New Roman';margin-left:85px;"><u>WELCOME THE LIST OF REGISTERED USERS ARE
                AS FOLLOW</u></h1>
    </div>
    <div class="middle">
        <br>
        <table class="table table-bordered text-center">
            <tr class="bg-dark text-white">
                <th>S.N</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Gender</th>
                <th>Birth</th>
                <th>Age</th>
                <th>1-Mobile</th>
                <th>2-Mobile</th>
                <th>Marital</th>
                <th>Disability</th>
                <th>Smoke</th>
                <th>Vill</th>
                <th>Landmark</th>
                <th>Post</th>
                <th>Pin</th>
                <th>Dist</th>
                <th>State</th>
                <th>E-Name</th>
                <th>E-Contact</th>
                <th>E-Relation</th>
                <th>E-Village</th>
                <th>E-Landmark</th>
                <th>E-Post</th>
                <th>UserName</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['lastname'];?>
                </td>
                <td><?php echo $row['fname']; ?> <?php echo $row['fmiddlename']; ?> <?php echo $row['flastname']; ?>
                <td><?php echo $row['mname']; ?> <?php echo $row['mmiddlename']; ?> <?php echo $row['mlastname']; ?>
                </td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['amobile']; ?></td>
                <td><?php echo $row['marital']; ?></td>
                <td><?php echo $row['disability']; ?></td>
                <td><?php echo $row['smoke']; ?></td>
                <td><?php echo $row['village']; ?></td>
                <td><?php echo $row['landmark']; ?></td>
                <td><?php echo $row['post']; ?></td>
                <td><?php echo $row['pin']; ?></td>
                <td><?php echo $row['dist']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['ename']; ?></td>
                <td><?php echo $row['econtact']; ?></td>
                <td><?php echo $row['relation']; ?></td>
                <td><?php echo $row['vill']; ?></td>
                <td><?php echo $row['lmark']; ?></td>
                <td><?php echo $row['pos']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
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