<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login And Registration Form</title>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="Register()">Register</button>
            </div>

            <div class="social-icons">
                <a href="https://github.com/Pradumang4/" target="_blank"> <img src="img/github.png"></a>
                <a href="https://instagram.com/mr_.prady" target="_blank"><img src="img/ig.png"></a>
                <a href="https://www.facebook.com/pradumangupta.gupta.12" target="_blank"><img src="img/fb.png"></a>
                <a href="https://wa.me/+917388002705" target="_blank"><img src="img/wa.png"></a>
            </div>
            <form id="login" class="input-group">

                <input type="text" class="input-field" placeholder="User Id" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <input type="submit" name="log" value="LOGIN" class="submit-btn">
            </form>

            <form id="Register" class="input-group_Reg" action="#" method="POST">
                <input type="text" class="input-field" placeholder="User Id" name="user" required>
                <input type="email" class="input-field" placeholder="Email Id" name="email" required>
                <input type="text" class="input-field" placeholder="Contact No." name="con" required>
                <input type="text" class="input-field" placeholder="Password" name="pass" required>
                <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions</span>
                <!--  <button type="submit" class="submit-btn" name="reg">Register</button>-->
                <input type="submit" name="save" value="Register" class="sub">
                <input type="text" class="contact" value="Contact us"
            </form>
        </div>

    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("Register");
        var z = document.getElementById("btn");

        function Register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";

        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";

        }
    </script>

</body>

</html>


<?php
if ($_POST['save']) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $con = $_POST['con'];

    $query = "INSERT INTO details values('$user','$email','$pass','$con')";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "inserted succesfully";
    } else {

        echo "fail to insert";
    }
}
?>             