<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DETAILS</title>
    <style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        max-width: 100vw;
        min-height: 100vh;
        overflow: hidden;
        background-attachment: fixed;
    }

    .up {
        max-width: 100vw;
        min-height: 5vh;
        background-image: url('Photos/Contact\ Us.gif');
        color: yellow;
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

    #head {
        margin-left: 375px;
    }

    #table {
        padding-left: 435px;
        padding-top: 195px;
    }

    #username {
        width: 25vw;
        height: 5vh;
        background-color: rgb(137, 155, 255);
        color: black;
        font-family: 'Courier New';
        font-size: x-large;
        margin-bottom: 25px;
        border-radius: 3px;

    }

    #submit {
        width: 18vw;
        height: 7vh;
        background-color: rgb(74, 125, 236);
        font-size: larger;
        border-radius: 7px;
    }

    #submit:hover {
        background-color: purple;
    }

    #submit:active {
        background-color: rgb(137, 155, 255);
    }

    .middle {
        max-width: 100vw;
        min-height: 90vh;
        background-image: url('Photos/user\ data.gif');
        background-size: cover;
        background-repeat: no-repeat;
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
        <a href="http://localhost/HMS/USER PANEL.html">
            <img src="Photos/Back Logo.gif" id="logo">
        </a>
        <a href="http://localhost/HMS/USER PANEL.html" id="paragraph"><b><i>GO BACK</i></b></a>
        <h2 id="head">VIEW-YOUR-DETAILS</h2>
    </div>
    <div class="middle">
        <form method="post" action="USER_DATA.php">
            <table id="table">
                <tr>
                    <th style="color:red; font-size:xx-large;"><b>*</b></th>
                    <th>
                        <input type="text" name="username" id="username" placeholder="Enter Your User-Name" required>
                    </th>
                </tr>
                <tr>
                    <th style="color:red; font-size:xx-large;"><b>*</b></th>
                    <th>
                        <input type="password" name="password" id="username" placeholder="Enter Your Password" required>
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th>
                        <button type="submit" id="submit"><b>VIEW DATA</b></button>
                    </th>
                </tr>
            </table>
        </form>
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