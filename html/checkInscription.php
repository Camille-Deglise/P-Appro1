<?php
/**
* Author      : Camille Déglise
* Date        : 29.02.2024
* Modifications : 
* Description : Validation des données du formulaire d'inscription
* Affichage des erreurs dans un tableau 
*/

  /*  echo "<pre>";
   var_dump($_POST);
   echo "</pre>"; */

   include("database.php");

   //Validation des données
$errors = array();
//Vérification du login
if(!isset($_POST["login"]) || ($_POST["login"] == "")) {
    $errors[] = "Le champ login doit être rempli";
 }

//Vérification du mot de passe 
if(!isset($_POST["password"]) || ($_POST["password"] == "")) {
    $errors[] = "Le champ password doit être rempli";
 }

//Vérification du prénom 
if(!isset($_POST["accountFirstName"]) || ($_POST["accountFirstName"] == "") || !preg_match('/^[-a-zA-ZÀ-ÿ]+$/', $_POST["accountFirstName"])) {
   $errors[] = "Le champ prénom est obligatoire et doit être de format alphabétique";
}

//Vérification du nom 
if(!isset($_POST["accountLastName"]) || ($_POST["accountLastName"] == "") || !preg_match('/^[-a-zA-ZÀ-ÿ]+$/', $_POST["accountLastName"])) {
   $errors[] = "Le champ nom est obligatoire et doit être de format alphabétique";
}

//Vérification de l'adresse mail
if(!isset($_POST["accountEmail"]) || ($_POST["accountEmail"] == "") 
|| !preg_match('/^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}$/', $_POST["accountEmail"]))
{
   $error[] = " Le champ email doit être rempli et il est obligatoire";
}

if (count($errors) > 0)
{
foreach($errors as $error) {
    echo $error . "<br>";
}
}
else {
   $db = new Database();
   $db ->addUser($_POST);
}

header("Location: confirmation.php?source=inscription");
exit; 