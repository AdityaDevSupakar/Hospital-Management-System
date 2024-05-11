<?php
$con = mysqli_connect("localhost","root","","hms");
if(!$con){
   die("Sorry Something Went Wrong To Connect With Database");
}
$query = "select * from staff_login";
$result = mysqli_query($con,$query);

function display_data(){
    global $con;
    $query = "select * from staff_login";
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
    <title>STAFF-MANIPULATION</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-attachment: fixed;

    }

    .up {
        max-width: 100vw;
        min-height: 5vh;
        background-image: url('Photos/Up Logo.gif');
        display: flex;
        background-repeat: no-repeat;
        background-size: cover;
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

    .down {
        max-width: 100vw;
        min-height: 5vh;
        color: red;
        padding-top: 2px;
        background-color: rgb(11, 11, 77);
    }
    </style>
</head>

<body>
    <div class="up">
        <a href="http://localhost/HMS/ADMIN_PANEL.html">
            <img src="Photos/Back Logo.gif" id="logo">
        </a>
        <a href="http://localhost/HMS/ADMIN_PANEL.html" id="paragraph"><b><i>GO BACK</i></b></a>
    </div>
    <div class="middle">
        <h1 style="font-family:Georgia, 'Times New Roman';margin-left:195px;"><u>Welcome Admin The List Of All Staffs Of
                Hospital</u></h1>
        <table class="table table-bordered text-center">
            <tr class="bg-dark text-white">
                <th>S.N</th>
                <th>First-Name</th>
                <th>Middle-Name</th>
                <th>Last-Name</th>
                <th>Gender</th>
                <th>Birth</th>
                <th>Mobile</th>
                <th>Vill</th>
                <th>Post</th>
                <th>Pin</th>
                <th>Dist</th>
                <th>Status</th>
                <th>UserId</th>
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
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['middlename']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['birth']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['vill']; ?></td>
                <td><?php echo $row['post']; ?></td>
                <td><?php echo $row['pin']; ?></td>
                <td><?php echo $row['dist']; ?></td>
                <td><?php echo $row['status']; ?></td>
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
    <div class="down">
        <marquee behavior="full" direction="left" transition="7">
            <b>***** !! ॐ सर्वे भवन्तु सुखिनः , सर्वे सन्तु निरामयाः , सर्वे भद्राणि पश्यन्तु , मा कश्चित् दुःख
                भाग्भवेत् !! ***** !! सभी सुखी होवें , सभी रोगमुक्त रहें , सभी का जीवन मंगलमय बनें और कोई भी दुःख का
                भागी न बने !! ***** !! O GOD MAY EVERYONE ALWAYS BE HAPPY , LET ALL BE FREE FROM DEBILITATION , LET
                ALL
                SEE GOODNESS , LET THERE BE NO VICTIMS OF SORROW !! *****</b>
        </marquee>
    </div>
</body>

</html>