<!DOCTYPE html>
    <html>
<head>
    
    <meta charset="UTF-8">
    <meta lang="fr" content="page recherche voiture occasion en vente garage vincent parrot">
    <title>garage vincent parrot</title>
    <link href="stylecheetEcf.css" rel="stylesheet">
</head>
<body>

        
   
    <!--parti pour la navigation entre les différentes pages du site web.-->

    <nav class="nav">
        <a href="ECF-garage.php">Page principale/connection.</a>
        <a href="voitures-neuves-ECF.php">Nos voitures neuves.</a>
        <a href="form-connection.php">mon espace.</a>     
        <a href="nos-marques-ECF.php">Nos marques.</a>
        <a href="nous-contacter-ECF.php">Nous contacter et nos adresses.</a>
    </nav>

<span>
    <form method="post">
        <input type="search" name="rechercheOccasion" placeholder="Modèle ou marques...">
        <input type="submit" name="Envoyer" id="validerLaRecherche">
    </form>
</span>

    <footer>
    <?php
    include_once 'footer.php';
    ?>
    </footer>
        </html>