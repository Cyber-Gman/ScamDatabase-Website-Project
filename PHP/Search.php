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
        @import "../css/Report.css";
        @import "../css/search.css";
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
<br><br><br>

<h1>Welcome to the Search Section</h1>
<hr>

<form action="../PHPAction/SearchAction.php" method="POST">
    <input type="text" name="search" placeholder="Enter Phone Number">

    <br><br>

    <label for="PhoneScam" class="container">Phone Scam
        <input type ="radio" name="Scam" id="PhoneScam" value="PhoneScam"><br>
        <span class="checkmark"></span>
    </label>


    <label for="TextScam" class="container">Text Scam
        <input type ="radio" name="Scam" id="TextScam" value="TextScam">
        <span class="checkmark"></span>
    </label>




    <input type="submit" name="submit" value="Search">
</form>


<br><br><br><br><br><br><br><br><br><br><br>

</body>
<footer style="width: 100%; left: 0; right: 0; position: absolute" >
    <p> All content copyright &copy; 2020, Graham Gibney, Jack Fagan, David Haruta. </p>
</footer>
</html>


<?php

require_once ('../Src/DBConnect.php');

?>

