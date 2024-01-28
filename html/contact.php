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
    <meta name="description" content="Auteur : C.D, Projet P-Appro1, site descriptif jeux de rôle, formulaire de contact ">
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
                
                <form action="checkForm.php" method= "post">
                    <div class="info">
                        <label for="infoN" id="infoN">Nom*</label>
                        <input type="text" name="name" id="name" value="">
                    </div>
                    <div class="info">
                        <label for="infoP" id="infoP">Prénom*</label>
                        <input type="text" name="firstname" id="firstname" value="">
                    </div>
                    <div class="info">
                        <label for="infoM" id="infoM">Mail*</label>
                        <input type="email" name="mail" id="mail" value="">
                    </div>
                    <div class="remarques">
                        <label for="remarques" id="remarques">Questions, remarques ?</label>
                        <textarea name="remarques" cols= "25" rows="5"></textarea>
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            </section>
            
        </article>
        <div id="flexCote"></div>
    </div>
    <?php 
    include("footer.inc.php");
    ?>
</body>
</html>