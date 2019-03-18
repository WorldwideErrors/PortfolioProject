<?php

$host = "localhost"; // De server waar de database staat
$dbname = "dbPortfolio"; // De naam van de database
$user = "root"; // De gebruikersnaam voor de database (root is default bij XAMPP)
$password = ""; // Het wachtwoord voor de gebruiker (leeg is default bij XAMPP)
try{
    // Proberen verbinding te maken met de database en de verbinding opslaan in de variable con
    $con = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
} catch(PDOException $ex){
    // Als de verbinding maken mislukt
    echo "<hr/>";
    echo "ERROR: Verbinding mislukt: $ex";
    echo "<hr/>";
}

if(isset($_POST["btnSave"])){
    // Formulier data ophalen en opslaan in variable
    $Naam = $_POST["Naam"];
    $Emailadress = $_POST["Emailadress"];
    $Message = $_POST["Message"];

    // Opbouwen van query
    $query = "INSERT INTO contact (Naam, Emailadress, Message) VALUES ".
        "('$Naam', '$Emailadress', '$Message')";
    // Query op het scherm tonen (voor development only!) NIET VERPLICHT!!
    //    var_dump($query);
    // Query klaarzetten om uit te gaan voeren
    $stm = $con->prepare($query);
    // Query uitvoeren en als dat lukt -> if, als dat niet lukt (fout) -> else
    if($stm->execute()){
        echo "Succesvol verzonden!";
    } else {
        echo "Error 1337: There went something wrong!";
    }
}