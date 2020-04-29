<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Software Dev Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut icon" type="image/png" href="../Images/favicon.png"/>

    <style>
        @import "../css/navnew.css";
        @import "../css/footer.css";
        @import "../css/h1.css";
        @import "../css/Dropdown.css";
        @import "../css/Report.css";
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
<img src="../Images/scam.jpg" alt="Website LOGO" style="border-bottom: #ce1818 4px solid; position: center; left: 0; right: 0;"  width="100%" height="300">
<br><br>
    <form method="post" style="border:1px solid #ccc" id="Scamform" action="../PHPAction/TextReportAction.php">
        <div class="container">

        <label for="ScamCompany">Scam Company </label>
            <input type="text" id="ScamCompany" name="ScamCompany"><br><br>

        <label for="DateofScam">Date of Scam</label>
            <input type="text" id="DateofScam" name="DateofScam"><br><br>

        <label for="PhoneNumber">Scammer Phone Number: </label>
            <input type="text" id="PhoneNumber" name="PhoneNumber"><br><br>

            <label for="textmessage">Scammer Text message Info: </label>
            <input type="text" id="textmessage" name="textmessage"><br><br>

        <input type="submit" value="Submit">

        </div>
    </form>




</body>
    <footer style="width: 100%; left: 0; right: 0">
        <p> All content copyright &copy; 2020, Graham Gibney, Jack Fagan, David Haruta. </p>
    </footer>
</html>


<?php
require_once '../Src/DBConnect.php';
?>
