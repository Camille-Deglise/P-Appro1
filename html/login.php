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
    <meta name="description" content="Auteur : C.D, Projet P-Appro1, site descriptif jeux de rôle, page de login en construction">
    <title>Login Joueur</title>
</head>

<body>
   
    <header>
        <h1>Login - joueurs </h1>
    </header>

    <div id="logjoueur">
        <div id="flexCote"></div>
        <article>
            <section id="failConnect">
                <h2 id="echecBestial">Faire un jet d'Int et de Dex, difficulté 6.</h2>
                <p id="logJ">
                    <h3 id="echecBestial">Echec Bestial </h3><br>
                    <br>
                    Lorsque vous avez cliqué sur la page de Login Joueur, une vive lumière a éclaté sur le site. <br>
                    Vous avez ressenti une irrépressible envie de fuir, comme si quelque chose, quelqu'un,
                    au plus profond de votre être, vous hurlait de courir au loin et vous suppliait de retourner sur la page d'accueil. <br>
                    <br>
                    La Bête en vous a gagné ce combat pour ce tour. Vous aurez peut-être plus de chance au prochain
                    lancé de dés. <br>
                    <br>
                </p>
            
            </section>
        </article>
        <div id="flexCote"></div>
    </div>
    <?php 
    include("footer.inc.php");
    ?>
</body>