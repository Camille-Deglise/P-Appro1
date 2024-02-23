<?php
/**
* Author      : Camille Déglise
* Date        : 02.02.2024
* Modifications : -
* Description : Classe Database contenant les fonctions et méthode pour la gestion du site Vampire
*/


class Database
{
     // Variable de classe
     protected $connector;

     /**
      * Méthode de création d'un objet PDO et se connecter à la BD
      */
     public function __construct() {
         try
         {
             // depuis Docker
             //$this->connector = new PDO('mysql:host=localhost:6033;dbname=db_vampire;charset=utf8' , 'root', 'root');
             
             // depuis UWAMP
             //$this->connector = new PDO('mysql:host=localhost:3306;dbname=db_vampire;charset=utf8' , 'root', 'root');
         
             // depuis UWAMP (version Sébeillon)
             $this->connector = new PDO('mysql:host=localhost;dbname=db_vampire;charset=utf8' , 'root', 'root');
         
 
         }
         catch (PDOException $e)
         {
             die('Erreur : ' . $e->getMessage());
         }
     }
 
 /**
     * Méthode qui exécute une simple requête mySQL
     */
    protected function querySimpleExecute($query){

        $req = $this->connector->query($query);
        return $req;
    }

    /**
     * Méthode prepare, execution d'une requête de manière sécurisée
     */
    protected function queryPrepareExecute($query, $binds){
        
        $req = $this->connector->prepare($query);
       
        foreach($binds as $bind) {  
            $req -> bindValue($bind[0], $bind[1], $bind[2]);
        }

        $req-> execute();
        return $req;
    }

     /**
     * Méthode pour traiter les données sous formes de tableau 
     */
    protected function formatData($req){

        // TODO: traiter les données pour les retourner par exemple en tableau associatif (avec PDO::FETCH_ASSOC)
        $result = $req->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }


    /**
     * Méthode pour ajouter les données du visiteur du site dans la base de données
     */
    public function addVisitor($datas)
    {
        
        $firstName = $datas["firstName"];
        $lastName = $datas["lastName"];
        $email = $datas["email"];
        $message = $datas["message"];

        $query = "INSERT INTO t_visitor(firstName, lastName, email, message)
        VALUES (:firstName, :lastName, :email, :message)";

        $binds = [
            [':firstName', $firstName, PDO::PARAM_STR],
            [':lastName', $lastName, PDO::PARAM_STR],
            [':email', $email, PDO::PARAM_STR],
            [':message', $message, PDO::PARAM_STR]
        ];

        $this->queryPrepareExecute($query, $binds);
    }
}


