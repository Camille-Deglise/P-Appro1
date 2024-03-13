    <!--
    Author      : Camille Déglise
    Date        : 05.04.2023
    Modifications : 29.02.2024
    Description : Page de connexion pour les personnes enregistrées ou d'inscriptions.
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
    <title>Connexion - Inscription </title>
</head>

<body>
   
    <header>
        <h1>Login - joueurs </h1>
    </header>

    <div id="logjoueur">
        <div id="flexCote"></div>
        <article>
            <section id="failConnect">
                <h3 id="echecBestial">Faire un jet d'Int et de Dex, difficulté 6.</h3>
                <p id="logJ">
                <form action="checkLogin.php" method= "post">
                    <div class="login">
                        <label for="login" id="login">Login</label>
                        <input type="text" name="login" id="login" value="">
                    </div>
                    <div class="userPwd">
                        <label for="userPwd" id="userPwd">Mot de passe</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <input type="submit" value="Se connecter">
                </form>
                </p>
                <h3>Pas encore inscrit ?</h3>
                <p id="inscription">
                    <div class="inscription">
                    <form action="checkInscription.php" method="post" >
                    
                    <div class="inscription">
                        <label class="inscription" for="login" >Login :</label>
                        <input type="text" name="login" id="login" required>
                    </div>
                    <div class="inscription">
                        <label class="inscription" for="password">Définissez un mot de passe :</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="inscription">
                        <label class="inscription" for="accountLastName" >Nom :</label>
                        <input type="text" name="accountLastName" id="accountLastName" required>
                    </div>
                    <div class="inscription">
                        <label class="inscription" for="accountFirstName"> Prénom :</label>
                        <input type="text" name="accountFirstName" id="accountFirstName" required>
                    </div>
                    <div class="inscription">
                        <label class="inscription" for="accountEmail">Adresse E-mail :</label> 
                        <input type="email" name="accountEmail" id="accountEmail" required>
                    </div>
                    <div class="inscription">
                        <label class="inscription" for="btnSubmit"></label>
                        <div class="endForm">
                            <input type="submit" name="btnSubmit" id="btnSubmit" value="Créer le compte">
                        </div>
                    </div>
                </form>
                    </div>
                </p>
            </section>
        </article>
        <div id="flexCote"></div>
    </div>
    <?php 
    include("footer.inc.php");
    ?>
</body>