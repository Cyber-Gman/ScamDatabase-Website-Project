<?php

require_once ('../Src/DBConnect.php');


try{
// Create prepared statement
    $sql = "INSERT INTO `Software`.textmessagetable (textmessage, ScamCompany, DateofScam, PhoneNumber) VALUES (
:ajsdfadf, :nfdafsjfls,
:flkjdsaflas, :fjas)";

    $stmt = $pdo->prepare($sql);


// Execute the prepared statement
    $stmt->execute();
    /*
    echo "Records inserted successfully.";
    */
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
