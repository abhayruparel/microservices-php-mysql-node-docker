<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: home.php");
    exit;
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $_SESSION['email'] = $email;
    $password = $_POST["password"];
    $cnn = mysqli_connect("localhost", "root", "", "tea_store");
    $qry = "select * from register where email ='$email' and password ='$password'";

    $result = $cnn->query($qry);
    $row = $result->fetch_assoc();
    //$roleid = $row["Role_id"];
    $cnt = mysqli_num_rows($result);

    if ($cnt == 1) {

        $db_email = $row['email'];
        $db_password = $row['password'];

        if ($email == $db_email and $password == $db_password) {
            session_start();
            //header("location: dash_pages/pages/dashboard.php");
            // echo "sucessfully logged in!!";
            $_SESSION["loggedin"] = true;
            header("location: home.php");
        } else {
            echo "Invalid username or password!";
        }
    } elseif ($cnt == 0) {
        echo "Value not found";
    }
}


?>

<html>

<head>
    <title>Login Form
    </title>
    <link rel="stylesheet" href="login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <!-- Login Form -->
            <form method="post">
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In" name="submit">
            </form>

            <!-- Remind Passowrd -->
            <div>
                <p>If you haven't signup then click on signup<a href="signup.php">Sign Up</a></p>
            </div>
            <div id="formFooter">
                <a class="underlineHover" href="reset-password.php">Forgot Password?</a>
            </div>

        </div>
    </div>
</body>

</html>