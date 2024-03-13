
   <!--
    Author      : Camille Déglise
    Date        : 29.02.2024
    Modifications : -
    Description : Page de confirmation d'envoi du formulaire de contact et d'inscription
    Possibilité de retour à la page d'accueil ou de s'inscrire.
    -->

<?php
//Session start
session_start();
include("header.inc.php");


$message ="";
if (isset($_GET['source'])) {
    if ($_GET['source'] == "contact") {
        $entete = "Confirmation d'envoi";
        $message = "Votre message nous est bien parvenu et nous vous en remercions !";
    } 
    elseif ($_GET['source'] == "inscription") {
        $entete = "Jet de dés : réussite critique";
        $message = "Votre inscription est réussie.";
    } 
} 
?>

<div id="flexCote"></div>
        <article>
            <section id="failConnect">
                <h2 id="echecBestial"><?php echo $entete; ?></h2>
                <p id="logJ">
                <?php echo $message; ?>
                </p>
                <form action="index.php">
                    <input type="submit" value="Retour à la page d'accueil">
                </form>
                <form action="login.php">
                 <input type="submit" value="Se connecter / s'inscrire">
                </form>
            </section>
        </article>
        <div id="flexCote"></div>
    </div>
    <?php 
    include("footer.inc.php");
    ?>
</body>