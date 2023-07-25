<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Je récupère la police Poppins que j'aime bien--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">    
    <title>Maisons !</title>
</head>
<body id="body">
    
    <h1 id='titre'>Création de maisons</h1>
    <!--formulaire maison bleue / vertes -->
    <div id="form">
    <form method="post" action="create_houses.php">
        <div id="nbrMaison1">
            <label for="myHouse1">Nombre de Maisons <span id="adjb" style=color:blue>bleues</span> : </label>
            <input type="number" id="myHouse1" name="myHouse1" value="<?php echo empty($_POST['myHouse1']) ? '0' : $_POST['myHouse1']; ?>" required/>        
        </div>

        <div id="nbrMaison2">
            <label for="myHouse2">Nombre de Maisons <span id="adjv" style=color:green>vertes</span> :</label>
            <input type="number" id="myHouse2" name="myHouse2" value="<?php echo empty($_POST['myHouse2']) ? '0' : $_POST['myHouse2']; ?>" required/>
        </div>

        <input class="button" type="submit" value="Créer les maisons" />

    </form>
    </div>
</body>

</html>
