<?php
session_start();
require_once('script-de-gestion-de-connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="../stylecheetEcf.css" rel="stylesheet">
        <title>formulaire de connection.</title>
        <meta charset="utf-8">
        <meta lang="fr" content="form de connection garage parrot.">
    </head>
    <body>

        <h1>connection a votre compte.</h1>

        <form method="post" action="script-de-gestion-de-connection.php">

            <label for="email">email</label>
        <input class="input" type="email" name="mail" id="mail">
<br>
            <label for="password">mot de passe</label>
        <input class="input" type="password" name="mot-de-passe" id="Mot-de-passe">

        <input class="button" type="submit" name="button" id="Button" value="envoyer">

            <br>
        </form>

    </body>


</html>