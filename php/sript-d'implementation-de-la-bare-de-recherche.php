<?php 
$dsn = 'mysql:host=localhost;port=3306;dbname=users';

try {$pdo = new PDO($dns, username:'root', password:'' );
}catch(PDOException $PDOException){
    echo 'Une erreur c\'est produite l\'ors de la connection a la bdd';
}

?>