-- Author : Camille Déglise
-- Date : 2024-01-28
-- Modifications : none
-- Description : Script pour initialiser la base de donnée du site 
---------------------------------------------------------------------------

DROP DATABASE IF EXISTS db_vampire;
CREATE DATABASE db_vampire;
USE db_vampire;

CREATE TABLE t_visitor(
   idVisitor INT AUTO_INCREMENT,
   firstName VARCHAR(150) NOT NULL,
   lastName VARCHAR(150) NOT NULL,
   email VARCHAR(250) NOT NULL,
   `message` TEXT,
   PRIMARY KEY(idVisitor)
);


