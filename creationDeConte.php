<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css" />
    <title>Document</title>
</head>
<body>
   <?php
        $exist = 0;
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=jeugestion;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
        $reponse = $bdd->query('SELECT * FROM joueur'); 
        while($donnees = $reponse->fetch())
        {
            if (strcmp($donnees["mail"],$_POST["mail"]) == 0){
                echo '<div class="alert alert-warning"><strong>Warning!</strong> Indicates a warning that might need attention.</div> ';
                $exist = 1;
                include("login.php");
            }
        }
        if ($exist == 0){
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
    ?> 
</body>
</html>
