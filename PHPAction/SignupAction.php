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
        @import "../css/Table.css";
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
<br><br><br><br><br><br>

</body>


<footer style="position: relative; bottom: 0">
    <p> All content copyright &copy; 2020, Graham Gibney, Jack Fagan, David Haruta. </p>
</footer>
</html>

<?php

require_once ('../Src/DBConnect.php');


try{
// Create prepared statement
    $sql = "INSERT INTO `Software`.users (username, email, password, PhoneNumber) VALUES (
:username, :email,
:password, :PhoneNumber)";

    $stmt = $pdo->prepare($sql);

// Bind parameters to statement
    $stmt->bindParam(':username', $_REQUEST['username']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    $stmt->bindParam(':password', $_REQUEST['password']);
    $stmt->bindParam(':PhoneNumber', $_REQUEST['PhoneNumber']);

// Execute the prepared statement
    $stmt->execute();

    echo "Records inserted successfully. Please return to main menu";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);