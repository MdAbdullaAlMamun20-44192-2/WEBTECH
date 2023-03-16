<?php
session_start();

$validUsername = false;
$validPassword = false;
$usernameError = "";
$passwordError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    if (empty($username) || strlen($username) < 2) {
        $usernameError = "Username must be at least 2 characters long";
    } else if(!preg_match("/^[a-zA-Z-_' ]*$/", $username)){
        $usernameError = "Only letters, spaces, apostrophes, dashes, and underscores are allowed";
    } else {
        $validUsername = true;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    if (empty($password) || strlen($password) < 8) {
        $passwordError = "Password must be at least 8 characters long";
    } else if (!preg_match('/[@#$%]/', $password)) {
        $passwordError = "Password must contain at least one special character (@, #, $, %)";
    } else {
        $validPassword = true;
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'forgotPassword') {
    $username = "test"; // Fetch the Username from the form
    $users = json_decode(file_get_contents('users.json'), true);
    foreach ($users as $user => $value) {
        if ($value['username'] === $username) {
            header('Location:ChangePassword.php');
        }
    }
    header('Location:ChangePassword.php');
}

if ($validUsername && $validPassword) {
    $data = file_get_contents("data.json");  
    $data = json_decode($data, true);
    if (isset($data)) {
        foreach($data as $row) {  
            if($row["username"] === $username){
                header('Location:UploadProfilePhoto.php');
            }
        } 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>Login</legend>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>" />
            <span class="error"><?php echo $usernameError; ?></span>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="" />
            <span class="error"><?php echo $passwordError; ?></span>
            <br>
            <hr>
            <input type="checkbox" name="rememberMe" id="rememberMe" /> Remember Me <br>
            <input type="submit" name="submit" value="Submit" />
            <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?action=forgotPassword">Forgot Password?</a>
        </fieldset>
    </form>
</body>
</html>
