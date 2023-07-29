<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
//je fait une inclusion de fichier qui permetra de récupérer les info session().
require('script-de-gestion-de-connection.php');
require_once('pdo.php');

$connected = $_SESSION['user'];
$accountType = $connected['accounttype'];
/*jeffectu des vérifications qui vont permettre de lancer une session valide si elle ne c'est pas lancé
                et qui vont charger le bandeau de modération adapté au type de compte connecté.*/
if (session_status() === PHP_SESSION_NONE) {
        session_start();
        var_dump($accountType);
}
if (isset($_SESSION['users'])){
        var_dump($accountType);
        }
// if ($accountType === 'ouvrier'){
//         require_once ('bandeau-connection-o.php');
//         }
// if ($accountType === 'modo'){
//         require_once ('bandeau-connection-m.php');
//         }
// else {session_destroy();}
// $session = session_status();
// var_dump($session);
?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8">
        <meta lang="fr" content="page vitrine garage vincent parrot">
        <title>garage vincent parrot</title>
        <link href="stylecheetEcf.css" rel="stylesheet">
</head>

<body>



        <!--parti pour la navigation entre les différentes pages du site web.-->

        <nav class="nav">
                <a href="voitures-occasions-ECF.php">Nos voitures occasions.</a>
                <a href="voitures-neuves-ECF.php">Nos voitures neuves.</a>
                <a href="form-connection.php">mon espace.</a>
                <a href="nos-marques-ECF.php">Nos marques.</a>
                <a href="nous-contacter-ECF.php">Nous contacter et nos adresses.</a>
        </nav>
        <?php




        ?>
        <!--présentation du garage de ses services et son équipe, ainsi que des images pour ilustrer.-->

        <h1>Garage parrot et son expertise profesionnelle.</h1>
        <img class="img1" src="images-ECF\image.png">
        <img class="img1" src="images-ECF\ob_cef774_100-8960.jpeg.jpg">

        <span>
                <p>Le garage parrot sur toulouse et un garage crée en 2021.</p>
                <img class="img2" src="images-ECF\S0-un-nouveau-logo-pour-citroen-388873.jpg">
                <p>Son propriaitaire et responssable monsieur parrot, avec son exeptise de plus de 15 années propose un service de vente de véhicule neuf et occasions.</p>
                <img class="img2" src="images-ECF\atelier-groupe-michel-1redimensionner.jpg">
                <p>Monsieur parrot et son équipe propose des véhicules pouvant correspondre a chaqun tout en vous accompagnant dans vos choix afin que vous trouviez la voiture faite pour vous.</p>
                <img class="img2" src="images-ECF\ouvrir-garage-entretien-reparation-vehicule.jpg">
                <br>
        </span>
</body>

<footer>
        <?php
        include_once 'footer.php';
        ?>
</footer>

</html>