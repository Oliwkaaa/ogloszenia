<!--Index.php = registration/login -->
<!--Home.php = main page -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogłoszenia muzyczne</title>
    <link rel="stylesheet" href="reg_log.css">
</head>

<body>
<div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()"> Login In</button>
            <button type="button" class="toggle-btn" onclick="register()"> Register</button>
        </div>

        <div class="logo"> <!--LOGO-->
            <h1>LOGO HERE</h1>
        </div>

        <form id="login" class="input-group" action="log_in.php" method="POST">
                <input type="text" class="input-field" name="login" placeholder="User Id" required>
                <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log in</button>
        </form>

        <form id="register" class="input-group" action="register.php" method="POST">
                <input type="text" class="input-field" name="login" placeholder="User Id" required>
                <input type="email" class="input-field" name="email" placeholder="Email Id" required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box">
                <span>I agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Register</button>
        </form>

    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        var f = document.getElementsByClassName("submit-btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";

            f.style.color = "red";
        }

        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }

    </script>

</div>
</body>

</html>