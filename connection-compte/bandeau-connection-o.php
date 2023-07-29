<!DOCTYPE html>
<html>
    <!--ce bandeau de connection viens ce superposer apres 
        connection sur les pages de la session c'est celuis des ouvriers.-->
    <head>
        <meta charset="utf-8" lang="fr">
        <meta content="bandeau contenant les fonctionnalitées en fonction des droits(ouvriers).">
        <link href="stylecheetEcf.css" rel="stylesheet">
    </head>
    <body>
        <header class="connected">
            <a class="boxconnected" href="ajout-de-voitures.php">ajouter des voitures</a>
            <a class="boxconnected" href="gérer-les-commentaires.php">gérer les commentaires</a>
            <a class="boxconnected" href="options-comptes.php">options</a>
        </header>
    </body>
</html>

<?php
require_once 'script-de-gestion-de-connection.php';
?>