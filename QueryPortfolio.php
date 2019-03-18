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

$query = 'SELECT code FROM project WHERE id = 1';
$stm = $con->prepare($query);
if($stm->execute())
{
    $result = $stm->fetchAll(PDO::FETCH_OBJ);
    foreach ($result as $key)
    {
        echo "<h3> Selecteren van huisjes </h3>";
        echo "<pre><code>".$key->code."</code></pre>";
        echo '<hr/>';
    }
}

$query = 'SELECT code FROM project WHERE id = 2';
$stm = $con->prepare($query);
if($stm->execute())
{
    $result = $stm->fetchAll(PDO::FETCH_OBJ);
    foreach ($result as $key)
    {
        echo "<h3> Verwijderen van huisjes </h3>";
        echo "<pre><code>".$key->code."</code></pre>";
    }
}

?>