<?php
    //j'inclus ma bdd.
    include_once ('pdo.php');


    //je défini mes variables en précisant quelles font partis de ma future fonction pour la sécurité que je défini plus tard.

    
$email = ($_POST['mail']);
$passWord = ($_POST['mot-de-passe']);

//var_dump($passWord && $email) cheked ok;
    
    //fonction de sécurité pour enlever les saisi de balise d'échappement et espaces.

    htmlspecialchars($email);
    htmlspecialchars($passWord);
        //echo $email;
        //echo $passWord;cheked ok
    trim($email);
    trim($passWord);
        //echo $email;
        //echo $passWord;cheked ok
    stripslashes($email);
    stripslashes($passWord);
        //echo $email;
        //echo $passWord;cheked ok

    //préparation de mes requette sql.

$pdoStatement = $dsn->prepare('SELECT * FROM comptes WHERE mail = :email && password = :password');
$pdoStatement->bindValue(':email', $email, PDO::PARAM_STR);
$pdoStatement->bindValue(':password', $passWord, PDO::PARAM_STR);
$pdoStatement->execute();
$user = $pdoStatement->fetch();
    /*je crai mes vérifications pour savoir si mes données saisies correspondent a mes données existantes dans la bdd 
    et pour savoir de quel type de compte il s'agit.*/
if ($user) {
        session_start();
        $_SESSION['user'] = $userr;
        header('../Location:pages-principales/ECF-garage.php');
    }
    //affichage des erreurs.
else {
        echo 'ces identifiants sont inconues';
        header('Location:form-de-connection.php');
    // var_dump($user);
    }
?>