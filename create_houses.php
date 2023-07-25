<link rel="stylesheet" href="style.css">
<?php

require 'MyHouse.php';
require 'index.php';

// Je prend les données soumises via le formulaire
$myHouse1Count = ($_POST['myHouse1']);
$myHouse2Count = ($_POST['myHouse2']);

// Grâce aux données, je fais une boucle qui génére le nombre de maisons voulues si au moins une des deux valeurs !== 0
if ($myHouse1Count > 0 || $myHouse2Count > 0) {
    for ($i = 1; $i <= $myHouse1Count; $i++) {
        $myHouse1 = new MyHouse1();
        echo $myHouse1->generate() . "<br />";
    }

    for ($i = 1; $i <= $myHouse2Count; $i++) {
        $myHouse2 = new MyHouse2();
        echo $myHouse2->generate() . "<br />";
    }
//Petit bouton qui sert à mettre les maisons rouges
    echo'<button id="redbutton">Mettre des LEDs rouge?</button>';
}
//Si les deux valeurs sont inférieures ou égales à 0 alors, j'écris un petit message et je rajoute une image de fond au body avec la classe 'blackhole' (voir css)
else{
    echo "<div class='pasMaison'>Voici le rien que vous avez décidé d'afficher....</div>
        <body class='blackhole'>";
}
?>
<script src="script.js"></script>
