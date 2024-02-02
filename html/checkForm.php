<?php
/**
* Author      : Camille Déglise
* Date        : 26.01.2024
* Modifications : 02.02.2024
* Description : Validation des données du formulaire 
* Affichage des erreurs dans un tableau 
*/

   echo "<pre>";
   var_dump($_POST);
   echo "</pre>";

//Validation des données

$errors = array();

//Vérification du prénom 
if(!isset($_POST["firstname"]) || ($_POST["firstname"] == ""
|| !ctype_alpha($_POST["firstname"])))
{
   $errors[] = "Le champ prénom est obligaoire et doit être de format alphabétique";
}

//Vérification du nom 
if(!isset($_POST["name"]) || ( $_POST["name"] == ""
|| !ctype_alpha($_POST["name"])))
{
   $errors[] = "Le champ nom est obligaoire et doit être de format alphabétique";
}

//Vérification de l'adresse mail

//Vérification du champ question
if(!isset($_POST["questionUser"]) || $_POST["questionUser"] == "" )
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
include("database.php");
$db = new Database();

}

header('location:');
exit();


    