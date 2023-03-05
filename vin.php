<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/vin.css">
    <title>Document</title>
</head>
<body>

    <div class="navbar"><h1 onclick="window.location='./index.php'">Met Vin</h1></div>
    

    <div class="hidden"> 
        <div>about us</div>
        <div>bla</div>
        <div>bla bla</div>
    </div>

    <div class="test"></div>

    <div class="main">
            <div id='choix' class="choix1"  onclick="window.location='./quizz/quizzVinRouge.php'">
                <div id='choixTitre' class="choix1Titre"> Vins rouges</div>
                <div id='choixMain' class="choix1Main"><img src="./images/vinification-vin-rouge-removebg-preview.png" alt=""></div>
                <div id='choixText' class="choix1Text">Trouvez un Vin Rouge qui vous correspond</div>
            </div>
            <div id='choix' class="choix2"  onclick="window.location='./quizz/quizzVinBlanc.php'">
                <div id='choixTitre' class="choix2Titre">Vins blancs</div>
                <div id='choixMain' class="choix2Main"><img src="./images/choisir-son-vin-blanc-pour-les-fetes.jpeg" alt=""></div>
                <div id='choixText' class="choix2Text">Un vin blanc pour votre soirée</div>
            </div>
            <div id='choix' class="choix3"  onclick="window.location='./quizz/quizzAutresVins.php'">
                <div id='choixTitre' class="choix3Titre">Autres vins</div>
                <div id='choixMain' class="choix3Main"><img src="./images/combien-de-temps-se-garde-le-champagne.jpeg" alt=""></div>
                <div id='choixText'  class="choix3Text">D'autres vin, d'autre spécialité, d'autre endroit</div>
            </div>
    </div>

    <footer></footer>
</body>
</html>