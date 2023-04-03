<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"]) || $_SESSION["status"] === FALSE) {
    header('Location:Login.php');
}


$currPasswordError = $_SESSION["currPasswordError"];
$newPasswordError = $_SESSION["newPasswordError"];
$reTypePasswordError = $_SESSION["reTypePasswordError"];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .container {
            display: flex;
            height: 600px;
            margin: 20px auto;
            max-width: 1015px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .left {
            background-color: #f5f5f5;
            padding: 20px;
            width: 30%;
            border-right: 1px solid #ddd;
            box-sizing: border-box;
        }

        .left h3 {
            margin-top: 0;
        }

        .right {
            padding: 198px;
            width: 85%;
            /* Overflow for scrolling */
            overflow-y: hidden;
            /* overflow-x: hidden; */
            box-sizing: border-box;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .button-container {
            /* position: fixed; */
            bottom: 0;
            left: 0;
            right: 0;
            background-color: white;
            padding: 10px;
            text-align: center;

            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }

        .request-button {
            display: block;
            margin: 20px auto;
            width: 100px;
            height: 30px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>

</head>

<body>
    <?php include '../../Layout/Supervisor/SupervisorHeader.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>Change Password</h3>
            <hr>
            <ul>
                <li><a href="Dashboard_Home.php">The Dashboard Home</a></li>
                <li><a href="Profile.php">My Profile</a></li>
                <li><a href="orphanProfiles.php">View Orphan Profiles</a></li>
                <li><a href="AdoptionRequests.php">View Adoption Requests</a></li>
                <li><a href="ChangePassword.php">Change Password</a></li>
                <li><a href="../../Controller/DeleteAccount_Handler.php">Delete Account</a></li>
            </ul>

            </p>


        </div>
        <div class="right">

            <form action="../../Controller/Adopter/ChangePassword_Handler.php" method="POST">

                <label for="currentPass">Current Password</label> <br>
                <input type="password" name="currentPass" id="currentPass" style="margin: 5px">
                <span class="required"> <br> &nbsp; &nbsp;
                    <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                        echo $currPasswordError;
                    } ?></span>
                <br>

                <label for="newPass" style="color: green">New Password</label> <br>
                <input type="password" name="newPass" id="newPass" style="margin: 5px">
                <span class="required"> <br> &nbsp; &nbsp;
                    <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                        echo $newPasswordError;
                    } ?> </span> <br>

                <label for="reTypeNewPass" style="color: red">Retype New Password</label> <br>
                <input type="password" name="reTypeNewPass" id="reTypeNewPass" style="margin: 5px">
                <span class="required"> <br> &nbsp;
                    &nbsp;<?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                                echo $reTypePasswordError;
                            } ?> </span>
                <br>
                <input type="submit" name="submit" value="Update" class="request-button" /> <br>

            </form>
            <!-- </form> -->

        </div>
    </div>



    <?php include '../../Layout/Supervisor/SupervisorFooter.php'; ?>
</body>

</html>