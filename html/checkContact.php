<?php
/**
* Author      : Camille Déglise
* Date        : 26.01.2024
* Modifications : 29.02.2024
* Description : Validation des données du formulaire 
* Affichage des erreurs dans un tableau 
*/

   //echo "<pre>";
   //var_dump($_POST);
   //echo "</pre>";

   include("database.php");
//Validation des données

$errors = array();

//Vérification du prénom 

if(!isset($_POST["firstName"]) || ($_POST["firstName"] == "") || !preg_match('/^[-a-zA-ZÀ-ÿ]+$/', $_POST["firstName"])) {
   $errors[] = "Le champ prénom est obligatoire et doit être de format alphabétique";
}

//Vérification du nom 

if(!isset($_POST["lastName"]) || ($_POST["lastName"] == "") || !preg_match('/^[-a-zA-ZÀ-ÿ]+$/', $_POST["lastName"])) {
   $errors[] = "Le champ nom est obligatoire et doit être de format alphabétique";
}


//Vérification de l'adresse mail
$mailUser = $_POST["email"];
if(!isset($mailUser) || ($mailUser == "") 
|| !preg_match('/^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}$/', $mailUser))
{
   $error[] = " Le champ email doit être rempli et il est obligatoire";
}


//Vérification du champ question
if(!isset($_POST["message"]) || $_POST["message"] == "" )
{
   $errors[] = "Il faut une question ou une remarque pour me contacter =)";
}

if (count($errors) > 0)
{
foreach($errors as $error) {
    echo $error . "<br>";
}
}
else {
   $db = new Database();
   $db ->addVisitor($_POST);
}

header("Location: confirmation.php?source=contact");
exit; 


    