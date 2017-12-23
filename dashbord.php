<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Document</title>
</head>
<body>
    Bienvenu sur le dashBord
    <?php 
        session_start();
        echo $_SESSION["idJoueur"];
    ?>
</body>
</html>