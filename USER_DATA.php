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
        background-color: cyan;
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
    </style>
</head>

<body>
    <div class="up">
        <a href="http://localhost/HMS/USER%20PANEL.html">
            <img src="Photos/Back Logo.gif" id="logo">
        </a>
        <a href="http://localhost/HMS/USER%20PANEL.html" id="paragraph"><b><i>GO BACK</i></b></a>
        <h1 style="font-family:Georgia, 'Times New Roman';margin-left:235px;color:navy;"><u>YOUR REGISTERED DATA ARE
                :-</u></h1>
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
        <table style="padding-left:35px;">
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
                    <label for="name"><b>USER NAME</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["firstname"] ;?> <?php echo $row["middlename"] ;?> <?php echo $row["lastname"] ;?>
                </td>
            </tr><br>
            <tr>
                <td>
                    <label for="fname"><b>FATHER's NAME</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["fname"] ;?> <?php echo $row["fmiddlename"] ;?> <?php echo $row["flastname"] ;?>
                </td>
            </tr><br>
            <tr>
                <td>
                    <label for="mname"><b>MOTHER's NAME</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["mname"] ;?> <?php echo $row["mmiddlename"] ;?> <?php echo $row["mlastname"] ;?>
                </td>
            </tr><br>
            <tr>
                <td>
                    <label for="gender"><b>GENDER</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["gender"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="birth"><b>DATE OF BIRTH</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["date"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="age"><b>CURRENT AGE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["age"] ;?> <b>Years</b></td>
            </tr>
            <tr>
                <td>
                    <label for="mobile"><b>MOBILE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["mobile"] ;?> </td>
            </tr>
            <tr>
                <td>
                    <label for="amobile"><b>OTHER MOBILE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["amobile"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="marital"><b>MARITAL STATUS</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["marital"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="disability"><b>DISABILITY TYPE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["disability"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="smoke"><b>DO SMOKE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["smoke"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="village"><b>VILLAGE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["village"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="landmark"><b>LANDMARK</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["landmark"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="post"><b>POST</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["post"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="pin"><b>PIN</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["pin"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="dist"><b>DISTRICT</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["dist"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="state"><b>STATE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td></td>
                <td><?php echo $row["state"] ;?></td>
            </tr>
        </table>
        <table style="padding-left: 275px; padding-bottom:205px;">
            <tr>
                <td>
                    <h2><u>EMERGENCY</u></h2>
                </td>
                <td></td>
                <td></td>
                <td>
                    <h2><u>CONTACT</u></h2>
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td>
                    <label for="ename"><b>NAME</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td><?php echo $row["ename"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="econtact"><b>CONTACT</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td><?php echo $row["econtact"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="relation"><b>RELATION</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td><?php echo $row["erelation"] ;?> </td>
            </tr>
            <tr>
                <td>
                    <label for="econtact"><b>CONTACT</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td><?php echo $row["econtact"] ;?></td>
            </tr>
            <tr>
                <td>
                    <label for="vill"><b>VILLAGE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td><?php echo $row["evill"] ;?> </td>
            </tr>
            <tr>
                <td>
                    <label for="lmark"><b>LANDMARK</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td><?php echo $row["elmark"] ;?> </td>
            </tr>
            <tr>
                <td>
                    <label for="pos"><b>POST</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td><?php echo $row["epos"] ;?> </td>
            </tr>
            <tr>
                <td>
                    <label for="edist"><b>DIST</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td><?php echo $row["edist"] ;?> </td>
            </tr>
            <tr>
                <td>
                    <label for="estate"><b>STATE</b></label>
                </td>
                <td><b>:</b></td>
                <td>-</td>
                <td><?php echo $row["estate"] ;?> </td>
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