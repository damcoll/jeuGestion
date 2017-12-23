<?php 
try

{
    $bdd = new PDO('mysql:host=localhost;dbname=jeugestion;charset=utf8', 'root', '');
    echo $_POST["Chance"];
    $req = $bdd->prepare('INSERT INTO perso(nom, prenom, ForceCr, Percepetion, Endurance, Charisme, Intelligence, Agilite, Chance) 
    VALUES(:nom, :prenom, :ForceCr, :Percepetion, :Endurance, :Charisme, :Intelligence, :Agilite, :Chance)');
    $req->execute(array(
    'nom' => $_POST["namePerso"],
    'prenom' => $_POST["prenonPerso"],
    'ForceCr' => $_POST["Force"],
    'Percepetion' => $_POST["Percepetion"],
    'Endurance' => $_POST["Endurance"],
    'Charisme' => $_POST["Charisme"],
    'Intelligence' => $_POST["Intelligence"],
    'Agilite' => $_POST["Agilité"],
    'Chance' => $_POST["Chance"]
    ));
}
catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

?>