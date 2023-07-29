-- Active: 1688147311528@@127.0.0.1@3306@users


        --création de la bdd pour stoker les comptes modérateurs.

--CREATE DATABASE users;

--CREATE TABLE comptes(
--id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
--firstname VARCHAR(50) NOT NULL,
--lastname VARCHAR(50) NOT NULL,
--mail VARCHAR(70) NOT NULL,
--password VARCHAR(70) NOT NULL,
--accounttype varchar(50) NOT NULL);

        --création du compte monsieur parrot.

--INSERT INTO comptes (id, firstname, lastname, mail, password, accounttype) VALUES ('','jean-louis','parrot','jeanlouisparrotgarrage@outlook.fr','Garage-parrot31000C','modo');

        --création de la table de bare de recherche qui sera remplis automatiquement l'orque un admin metra une annonce pour une voiture occasion ou neuve.

--CREATE TABLE bareDeRecherche (
--Motsclefs VARCHAR(70) NOT NULL);


        --création de la TABLE répertoriant les offres de voitures 

-- CREATE TABLE ventevoiture(
-- marque VARCHAR(50) NOT NULL,
-- modèle VARCHAR(50) NOT NULL,
-- couleur VARCHAR(50) NOT NULL,
-- puissancemoteur VARCHAR(50) NOT NULL,
-- année INT NOT NULL,
-- consommation VARCHAR(50) NOT NULL,
-- indicecarbonne VARCHAR(50) NOT NULL,
-- coutentretien VARCHAR(50) NOT NULL,
-- état VARCHAR(50) NOT NULL,
-- description VARCHAR(250) NOT NULL
-- );