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
            $req = $bdd->prepare('INSERT INTO joueur(mail, password) 
            VALUES(:mail, :password)');
            $req->execute(array(
            'mail' => $_POST["mail"],
            'password' => $_POST["pass"]
            ));
            $reponse = $bdd->query('SELECT * FROM joueur'); 
            while($donnees = $reponse->fetch())
            {
                if (strcmp($donnees["mail"],$_POST["mail"]) == 0){
                    if(!isset($_SESSION)) 
                    { 
                        session_start();
                    } 
                    $_SESSION["idJoueur"] = $donnees["id"];
                }
            }
            include("creationPersonnage.php");
        }
    ?> 
</body>
</html>
