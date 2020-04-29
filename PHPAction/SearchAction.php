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

<Table border = '2px' align="center">
    <tr><th colspan = '5'>Return Value</th></tr>
    <t>
        <th>Scam ID</th>
        <th>Name of Scammer</th>
        <th>Scam Company</th>
        <th>Date of Scam</th>
        <th>Phone Number</th>
    </t>

<?php

$answer = $_POST['Scam'];
if ($answer == "PhoneScam") {

    require_once '../Src/DBConnect.php';

    try {
        $search_value = $_POST["search"];

    
        $res = $pdo->query("select * from scamtable where PhoneNumber like '%$search_value%'")->fetchAll();


    } catch (PDOException $e) {
        die("ERROR: Could not able to execute $pdo. " . $e->getMessage());

    }
// Close connection
    unset($pdo);

    foreach ($res as $row) {
        ?>
        <tr>
            <td> <?php echo $row['ScamID']; ?> </td>
            <td> <?php echo $row['NameofScammer']; ?> </td>
            <td> <?php echo $row['ScamCompany']; ?> </td>
            <td> <?php echo $row['DateofScam']; ?> </td>
            <td> <?php echo $row['PhoneNumber']; ?> </td>
        </tr>
        <?php
    }
}   else $answer = $_POST['Scam'];
if ($answer == "TextScam") {

    require_once '../Src/DBConnect.php';

        try {
            $search_value = $_POST["search"];


            $res = $pdo->query("select * from textmessagetable where PhoneNumber like '%$search_value%'")->fetchAll();


        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $pdo. " . $e->getMessage());

        }
        // Close connection
        unset($pdo);

        foreach ($res as $row) {
        ?>
    <tr>
        <td> <?php echo $row['ScamTextID']; ?> </td>
        <td> <?php echo $row['ScamCompany']; ?> </td>
        <td> <?php echo $row['DateofScam']; ?> </td>
        <td> <?php echo $row['PhoneNumber']; ?> </td>
        <td> <?php echo $row['textmessage']; ?> </td>
    </tr>
    <?php
    }
        }
?>








</body>


<footer style="position: relative; bottom: 0">
    <p> All content copyright &copy; 2020, Graham Gibney, Jack Fagan, David Haruta. </p>
</footer>
</html>