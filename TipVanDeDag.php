<?php

$host = "localhost"; // De server waar de database staat
$dbname = "dbPortfolio"; // De naam van de database
$user = "root"; // De gebruikersnaam voor de database (root is default bij XAMPP)
$password = ""; // Het wachtwoord voor de gebruiker (leeg is default bij XAMPP)
try{
    // Proberen verbinding te maken met de database en de verbinding opslaan in de variable con
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
} catch(PDOException $ex){
    // Als de verbinding maken mislukt
    echo "<hr/>";
    echo "ERROR: Verbinding mislukt: $ex";
    echo "<hr/>";
}

$vandaag = date("l");
if($vandaag == "Monday"){
    $qQuote = "SELECT * FROM Quote WHERE id=1";
    $stm = $pdo->prepare($qQuote);
    if($stm->execute()){
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $key){
            echo "Tip of ".$vandaag." : <br/>";
            echo $key->quote."<br/>";
        }
    }
}else if($vandaag == "Tuesday"){
    $qQuote = "SELECT * FROM Quote WHERE id=2";
    $stm = $pdo->prepare($qQuote);
    if($stm->execute()){
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $key){
            echo "Tip of ".$vandaag." : <br/>";
            echo $key->quote."<br/>";
        }
    }
}else if($vandaag == "Wednesday"){
    $qQuote = "SELECT * FROM Quote WHERE id=3";
    $stm = $pdo->prepare($qQuote);
    if($stm->execute()){
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $key){
            echo "Tip of ".$vandaag." : <br/>";
            echo $key->quote."<br/>";
        }
    }
}else if($vandaag == "Thursday"){
    $qQuote = "SELECT * FROM Quote WHERE id=4";
    $stm = $pdo->prepare($qQuote);
    if($stm->execute()){
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $key){
            echo "Tip of ".$vandaag." : <br/>";
            echo $key->quote."<br/>";
        }
    }
}else if($vandaag == "Friday"){
    $qQuote = "SELECT * FROM Quote WHERE id=5";
    $stm = $pdo->prepare($qQuote);
    if($stm->execute()){
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $key){
            echo "Tip of ".$vandaag." : <br/>";
            echo $key->quote."<br/>";
        }
    }
}else if($vandaag == "Saturday"){
    $qQuote = "SELECT * FROM Quote WHERE id=6";
    $stm = $pdo->prepare($qQuote);
    if($stm->execute()){
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $key){
            echo "Tip of ".$vandaag." : <br/>";
            echo $key->quote."<br/>";
        }
    }
}else if($vandaag == "Sunday") {
    $qQuote = "SELECT * FROM Quote WHERE id=7";
    $stm = $pdo->prepare($qQuote);
    if($stm->execute()){
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $key){
            echo "Tip of ".$vandaag." : <br/>";
            echo $key->quote."<br/>";
        }
    }
}
?>