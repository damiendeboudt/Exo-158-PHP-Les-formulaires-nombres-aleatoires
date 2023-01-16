<form action="/index.php" METHOD="post">
    <div>
        <label for="numberX">Number X</label>
        <input type="number" name="numberX" id="numberX">
    </div>
    <div>
        <label for="numberY">Number Y</label>
        <input type="number" name="numberY" id="numberY">
    </div>
    <div>
        <input type="submit" name="Envoyer" id="">
    </div>
</form>
<?php

$numX = intval($_POST['numberX']);
$numY = intval($_POST["numberY"]);

if(isset($numX) && $numY) {
    $randomNumber = rand($numX,$numY);
    echo $randomNumber;
}

/*
 *
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/