    <!--
    Author      : Camille Déglise
    Date        : 05.04.2023
    Modifications : 28.01.2024
    Description : P-Appro1 - dynamisation d'un site web statique avec PHP
    -->
    <?php
//Session start
session_start();
include("header.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <link href='https://fonts.googleapis.com/css?family=Walter Turncoat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
    <link href="../css/layoutCSS.css" rel="stylesheet" >
    <link rel="shortcut icon" href="/icones/dragon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Auteur : C.D, P-WEBSTATIQUE_Projet ETML 2023, page de contact contenant un
    formulaire simple.">
    <title>Formulaire de contact</title>
</head>

<body>
    <header>
        <h1>Contact </h1>
    </header>

    <div id="formContact">
        <div id="flexCote"></div>
        <article>
            <section id="formContact">
                <h2>Formulaire de contact</h2>
                <p id="starChamp">Les champs indiqués d'une étoile sont obligatoires</p>
                
                <div class="info">
                    <div class="info">
                        <label id="infoN">Nom*</label>
                        <input type="text">
                    </div>
                    <br>
                    <div class="info">
                        <label id="infoP">Prénom*</label>
                        <input type="text">
                    </div>
                    <br>
                    <div class="info">
                        <label id="infoM">Mail*</label>
                        <input type="text">
                    </div>
                    <br>
                <div class="remarques">
                    <div class="remarques">
                        <label id="remarques">Questions, remarques ?</label>
                        <textarea name="remarques"></textarea>
                        <input class="button" type="button" value="Envoyer">
                    </div>
                </div>
            </section>
            
        </article>
        <div id="flexCote"></div>
    </div>
    <?php 
    include("footer.inc.php");
    ?>
</body>
</html>