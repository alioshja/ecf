<?php
/*je me connecte a ma bdd et je capture une éventuelle erreur pour éviter une faille de sécurité.
    je fait une boucle foreach sur ma bdd en méthode query pour récupérer mes informations du tableau
    de la bdd pour les comparer avec ce que l'utilisateur a envoyé grace au formulaire en méthode post.*/

try {
    $dsn = new PDO('mysql:host=localhost;port=3306;dbname=users', username: 'root', password: '');
    echo 'connection success';
} 
catch (PDOException $PODException) {
    echo 'une erreur est survenue, connection a la base de donnée impossible.';
}
?>