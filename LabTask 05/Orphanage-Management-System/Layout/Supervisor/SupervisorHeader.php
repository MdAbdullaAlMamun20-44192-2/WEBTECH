<?php
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    // die("You are not logged in");
    header("Location: ../../Views/Supervisor/Login.php");
}


?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
    nav {
        float: right;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    li {
        display: inline-block;
        margin-right: 10px;
    }
    </style>
</head>

<body>
    <header>

        <nav>
            <ul>

                <li><span></span><a
                        href="../../Views/Supervisor/Profile.php"><?php echo $_SESSION["loginUser_Name"]; ?></a>
                </li>
                <li><a href="../../Controller/Supervisor/Logout_Handler.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <hr>
</body>

</html>