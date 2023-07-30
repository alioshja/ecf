<?php
require_once ('../connection-compte/script-de-gestion-de-connection.php');
?>
<!DOCTYPE html>
    <html>
<head>
    
    <meta charset="UTF-8">
    <meta lang="fr" content="page recherche voiture neuve en vente garage vincent parrot">
    <title>garage vincent parrot</title>
    <link href="../stylecheetEcf.css" rel="stylesheet">
</head>
<body>

        
   
    <!--parti pour la navigation entre les différentes pages du site web.-->

    <nav class="nav">
        <a href="voitures-occasions-ECF.php">Nos voitures occasions.</a>
        <a href="ECF-garage.php">Page principale/connection.</a>
        <a href="form-connection.php">mon espace.</a>     
        <a href="nos-marques-ECF.php">Nos marques.</a>
        <a href="nous-contacter-ECF.php">Nous contacter et nos adresses.</a>
    </nav>

    <span>
        <form method="post">
            <input type="checkbox" name="marquesVoituresNeuves1" id="renault">
            <label for="renault">Renault</label>

            <input type="checkbox" name="marquesVoituresNeuves2" id="citröen">
            <label for="citröen">Citröen</label>

            <input type="checkbox" name="marquesVoituresNeuves3" id="dsAutomobiles">
            <label for="dsAutomobiles">DS Automobiles</label>

            <input type="checkbox" name="marquesVoituresNeuves4" id="bugatti">
            <label for="Bugatti">Bugatti</label>

            <input type="checkbox" name="marquesVoituresNeuves5" id="Peugeot">
            <label for="Peugeot">Peugeot</label>

            <input type="checkbox" name="marquesVoituresNeuves6" id="ToutesSélections">
            <label for="toutesSélections">Toutes les sélections</label>
        </form>
    </span>
<footer>
    <?php
    include_once 'footer.php';
    ?>
</footer>
        </html>