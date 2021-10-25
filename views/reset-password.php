<?php
if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $new_password = $_POST["npassword"];
    $confirm_password = $_POST["cpassword"];
    $cnn = mysqli_connect("localhost", "root", "", "tea_store");
    $qry = "select * from register where email = '$email'";
    $a = "";

    if ($result = $cnn->query($qry)) {

        while ($row = $result->fetch_assoc()) {

            $cnt = mysqli_num_rows($result);

            if ($cnt == 1) {
                $db_email = $row['email'];

                if ($db_email == $email and $new_password == $confirm_password) {
                    $update = "update register set password = '$new_password' where email = '$db_email'";
                    $RESULTS = $cnn->query($update);
                    //header("location:../../signin.php");
                    echo "Password Updated!!!";
                    //require_once("mail_function.php");
                    // $staus=sendOTP($_POST["email"]);
                } else {

                    echo "Invalid Username or Password don't match";
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Forget Password</title>
    <style>
        .box {
            margin: 150px 400px 118px;

            padding-top: 50px;
            padding-left: 50px;
            padding-right: 100px;
            padding-bottom: 50px;
            border-radius: 10px;
        }

        .head {
            font-size: 25px;
            text-align: justify-all;
            overflow: hidden;
            white-space: nowrap;
            font-family: Cambria;



        }

        .field {
            font-size: 25px;
            border-bottom-color: black;
            border-right: none;
            border-left: none;
            border-top: none;
            border-radius: 10px;
            max-width: 220px;
            font-family: monospace;
        }

        .btn {
            font-size: 20px;
            border-radius: 8px;
            font-family: sans-serif;
            background-color: orange;

        }

        body {
            background-image: url("image2.jpg");
            background-position: left;
            background-repeat: no-repeat;
            background-size: cover;
            margin-bottom: 70px;
        }

        .btn:hover {
            background-color: greenyellow;
        }

        .txt {
            font-size: 30px;
            text-align: center;
            font-family: sans-serif;

        }

        hr {
            background-color: black;

        }
    </style>
</head>

<body>
    <div class="box">
        <form method="post">

            <div class="txt">
                Reset Password
            </div>
            <hr>
            <table cellpadding="5" cellspacing="5">
                <tr>
                    <td class="head"><label>Email</label></td>
                    <td><input class="field" type="email" name="email" placeholder="Email Id"></td>
                </tr>
                <tr>
                    <td class="head"><label>New Password</label></td>
                    <td><input class="field" type="password" name="npassword" placeholder="New Password"></td>
                </tr>
                <tr>
                    <td class="head"><label>Confirm Password</label></td>
                    <td><input class="field" type="password" name="cpassword" placeholder="Confirm Password"></td>
                </tr>

                <tr>
                    <td><input type="submit" class="btn" name="submit" value="Submit"></td>
                </tr>
            </table>

        </form>
    </div>
</body>

</html>