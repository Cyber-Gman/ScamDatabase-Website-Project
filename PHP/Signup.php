<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Software Dev Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut icon" type="image/png" href="../Images/favicon.png"/>

    <style>
        @import "../css/navnew.css";
        @import "../css/Dropdown.css";
        @import "../css/footer.css";
        @import "../css/signup.css";
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="../index.html">Home Page</a></li>
        <li><a href="../PHP/Search.php">Check a Phone Number</a></li>
        <div class="dropdown">
            <button class="dropbtn">Phone Scammer Options
            </button>
            <div class="dropdown-content">
                <li><a href="../PHP/SubmitPhoneScam.php">Submit Phone Scam</a></li>
                <li><a href="../PHP/SubmitTextScam.php">Submit Text Scam</a></li>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Sign-up and Register</button>
            <div class="dropdown-content">
                <li><a href="../PHP/Signup.php">Sign-up</a></li>
                <li><a href="../PHP/Login.php">Login</a></li>
            </div>
        </div>
    </ul>
</nav>
<br><br><br><br><br>
<img src="../Images/scam.jpg" alt="Website LOGO" style="border-bottom: #ce1818 4px solid; left: 0; right: 0;"  width="100%" height="300">
<br><br>

<form action="../PHPAction/SignupAction.php" method="post">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="username"><b>User Name:</b></label>
        <input type="text" id="username" placeholder="Enter User Name" name="username" required>

        <label for="email"><b>Email:</b></label>
        <input type="text" id="email" placeholder="Enter Email" name="email" required>

        <label for="PhoneNumber"><b>Phone Number:</b></label>
        <input type="tel" id="PhoneNumber" placeholder="Enter Phone Number" name="PhoneNumber" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}">

        <label for="password"><b>Password:</b></label>
        <input type="password" id="password"  placeholder="Enter Password" name="password" required>

        <label for="psw-repeat"><b>Repeat Password:</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="reset" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>


</body>
<footer style="width: 100%">
    <p> All content copyright &copy; 2020, Graham Gibney, Jack Fagan, David Haruta. </p>
</footer>



</html>


<?php

require_once ('../Src/DBConnect.php');

?>

