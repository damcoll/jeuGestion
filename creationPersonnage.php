<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    
</head>
<body>
<script src="creationPersonnage.js" type="text/javascript"></script>
<div class="container">
    <form action="enregistrementPerso.php" enctype="multipart/form-data" method="post" id="formulaire" name="formulaire" onsubmit="return valid();">
        <table class="table table-striped">
            <tr><td><div class="form-group row"><h3>Nom du personnage : </h3></td><td><input type="text" name="namePerso" class="form-control"></div></td></tr>
            <tr><td><div class="form-group row"><h3>Prenon du personnage : </h3></td><td><input type="text" name="prenonPerso" class="form-control"></div></td></tr>
        </table>

        
        <table class="table table-striped">
            <tr>
                <td colspan="2" class="text-center">
                    <div class="form-group row ">
                        <h3 class="">Caracterisque : </h3>
                    </div>
                </td>
                <td colspan="2">
                    <div class="form-group row">
                        <h4 id="visuelPts"></h4>
                    </div>
                </td>
            </tr>
            <tr >
                <td scope="col" style="width:300%">
                    <h4>Force </h4>
                </td>
                <td scope="col" style="width:10%">
                    <button type="button" onclick="forcePlus()">+</button>
                </td>
                <td scope="col" >
                    <h4>
                        <input id="visuelForce" name="Force" style="text-align: right;">
                    </h4>
                </td>
                <td scope="col" style="width:10%">
                    <button type="button" onclick="forceMoin()">-</button>
                </td>
            </tr>
            <tr>
                <td scope="col" style="width:300%;">
                    <h4>Percepetion </h4>
                </td>
                <td scope="col" style="width:10%;"> 
                        <button type="button" onclick="percepetionPlus()">+</button>
                </td>
                <td scope="col">
                <h4>
                        <input id="visuelPercepetion" name="Percepetion" style="text-align: right;">
                    </h4>
                </td>
                <td scope="col" style="width:10%;">
                    <button type="button" onclick="percepetionMoin()">-</button>
                </td>
            </tr>
            <tr>
                <td scope="col" style="width:300%;">
                    <h4>Endurance </h4>
                </td>
                <td scope="col" style="width:10%;"> 
                    <button type="button" onclick="endurancePlus()">+</button>
                </td>
                <td scope="col">
                <h4>
                        <input id="visuelEndurance" name="Endurance" style="text-align: right;">
                    </h4>
                </td>
                <td scope="col" style="width:10%;">
                    <button type="button" onclick="enduranceMoin()">-</button>
                </td>
            </tr>
            <tr>
                <td scope="col" style="width:300%;">
                    <h4>Charisme </h4>
                </td>
                <td scope="col" style="width:10%;">  
                    <button type="button" onclick="charismePlus()">+</button>
                </td>
                <td scope="col">
                <h4>
                        <input id="visuelCharisme" name="Charisme" style="text-align: right;">
                    </h4>
                </td>
                <td scope="col" style="width:10%;">
                    <button type="button" onclick="charismeMoin()">-</button>
                </td>
            </tr>
            <tr>
                <td scope="col" style="width:300%;">
                    <h4>Intelligence</h4>
                </td>
                <td scope="col" style="width:10%;"> 
                    <button type="button" onclick="intelligencePlus()">+</button>
                </td>
                <td scope="col">
                <h4>
                        <input id="visuelIntelligence" name="Intelligence" style="text-align: right;">
                    </h4>
                </td>
                <td scope="col" style="width:10%;">
                    <button type="button" onclick="intelligenceMoin()">-</button>
                </td>
            </tr>
            <tr>
                <td scope="col" style="width:300%;">
                    <h4>Agilité </h4>
                </td>
                <td scope="col" style="width:10%;"> 
                    <button type="button" onclick="agilitéPlus()">+</button>
                </td>
                <td scope="col" >
                <h4>
                        <input id="visuelAgilité" name="Agilité" style="text-align: right;">
                    </h4>
                </td>
                <td scope="col" style="width:10%;">
                    <button type="button" onclick="agilitéMoin()">-</button>
                </td>
            </tr>
            <tr>              
                <td scope="col" style="width:300%;">
                    <h4>Chance </h4>
                </td>
                <td scope="col" style="width:10%;">
                    <button type="button" onclick="chancePlus()">+</button>
                </td>
                <td scope="col">
                    <h4>
                        <input id="visuelChance" name="Chance" style="text-align: right;">
                    </h4>
                </td>
                <td scope="col" style="width:10%;">
                    <button type="button" onclick="chanceMoin()">-</button>
                </td>
            </tr>
            
        </table>
    
        <input type="submit" type="button" class="btn btn-primary" value="Validé">
    </form>
</div>
</body>
</html>