<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css" />
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
        $conect = 0;
        $reponse = $bdd->query('SELECT * FROM joueur'); 
        while($donnees = $reponse->fetch())
        {
            if (strcmp($donnees["mail"],$_POST["mail"]) == 0 && strcmp($donnees["password"],$_POST["pass"]) == 0){
                $_SESSION["idJoueur"] = $donnees["id"];
                $conect = 1;
                include("../dashbord.php");
            }
        }
        if ($conect == 0)
            {
                echo '<div class="alert alert-warning"><strong>Warning!</strong> Indicates a warning that might need attention.</div> ';
                include ("login.php");
            }
?>