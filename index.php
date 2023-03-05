<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Document</title>
</head>
<body>
    
<div class="navbar">
    <h1 onclick="window.location='./index.php'">Met Vin</h1>
    <input type="text" placeholder="Je cherche un vin, un plat....?" class="input">
</div>
<div class="hidden"> 
    <div>about us</div>
    <div>bla</div>
    <div>bla bla</div>
</div>

<div class="main">
        
            <div id='choix' class="choix1" onclick="window.location='./vin.php'">
                <div id='choixTitre' class="choix1Titre">Choix des vins</div>
                <div id='choixMain' class="choix1Main"><img src="./images/20658849lpw-20659153-article-jpg_7333136_1250x625.jpg" alt=""></div>
                <div id='choixText' class="choix1Text"></div>
            </div>
            <div id='choix' class="choix2" onclick="window.location='./accord.php'">
                <div id='choixTitre' class="choix2Titre" >Accord mets vins</div>
                <div id='choixMain' class="choix2Main"><img src="./images/accord_mets_vin.jpg" alt=""></div>
                <div id='choixText' class="choix2Text"></div>
            </div>

</div>

</body>
</html>