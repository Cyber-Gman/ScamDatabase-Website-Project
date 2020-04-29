<?php


require_once('../Src/DBConnect.php');


try {
// Create prepared statement
    $sql = "INSERT INTO `Software`.ScamTable (NameofScammer, ScamCompany, DateofScam, PhoneNumber) VALUES (
:afdfsfaj, :afajfajd,
:fdsaljdksasad, :fhaldkjfdsa)";

    $stmt = $pdo->prepare($sql);

// Execute the prepared statement
    $stmt->execute();
    /*
    echo "Records inserted successfully.";
    */
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);