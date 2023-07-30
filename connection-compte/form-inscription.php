<!DOCTYPE html>
<html>
    <head>
        
        <title>formulaire d'inscription.</title>
        <meta charset="utf-8">
        <meta lang="fr" content="formulaire d'incription au site garage parrot.">
        <link href="../stylecheetEcf.css" rel="stylesheet">
    </head>
    <body>

        <h1>inscription:</h1>

        <form method="post" action="script-de-gestion-d'inscription.php">
            <img src="../images-ECF/facebook.svg">
            <img src="../images-ECF/google.svg">
            <img src="../images-ECF/instagram.svg">
            <img src="../images-ECF/snapchat.svg">

    <p>veuillez saisir vos informations personnelles.</p>
            
    <label for="email">email:</label>
        <input class="input" type="email" name="email" id="email" placeholder="exemple@gg.com" maxlength="50">
<br>
    <label for="password">mot de passe:</label>    
        <input class="input" type="password" name="mot-de-passe" id="password" placeholder="ex:jean-marie12334" required maxlength="30">
<br>
    <label for="password-confirm">confirmation du mot de passe:</label>
            <input class="input" type="password" name="password-confirm" id="password-confirmation" placeholder="..." required maxlength="30"> 
<br>
    <label for=firstName>Prénom:</label>
        <input class="input" type=text name="prénom" id="FirstName" placeholder="jean-michel" required maxlength="25">
<br>
    <label for=lastName>Nom:</label>
        <input class="input" type="text" name="Nom" id="LastName" placeholder="dupond" required maxlength="25">


          
            <input class="button" type="submit" name="button" id="button" value="envoyer">
        

        </form>

    </body>
</html>
