<?php
    //j'inclus ma bdd.
    include_once ('pdo.php');

    //je défini mes variables en précisant quelles font partis de ma future fonction pour la sécurité que je défini plus tard.

    
return $email= ($_POST['mail']);
return $passWord = ($_POST['mot-de-passe']);
    
    //fonction de sécurité pour enlever les saisi de balise d'échappement et espaces.

    $donnes = htmlspecialchars($email && $passWord) ;
    trim($donnes) ;
    //stripslashes($email);
    //stripslashes($passWord);
   
    /*je stoque mes nouvelles valeurs dans de nouvelles var qui serviront a 
    sauvegarder les valeurs appres leurs soumissions.*/
$mail = $donnes[$email];
$pass = $donnes[$passWord];

    //préparation de mes requette sql.

$pdoStatement = $dsn->prepare('SELECT * FROM comptes WHERE mail = :email && password = :password');
$pdoStatement->bindValue(':email', $mail, PDO::PARAM_STR);
$pdoStatement->bindValue(':password', $pass, PDO::PARAM_STR);
$pdoStatement->execute();
$user = $pdoStatement->fetch();
    /*je crai mes vérifications pour savoir si mes données saisies correspondent a mes données existantes dans la bdd 
    et pour savoir de quel type de compte il s'agit.*/
if ($user) {
        echo 'identifiants validées';
        session_start();
        $userr = $user;
        $_SESSION['user'] = $userr;
        header('Location:ECF-garage.php');
    }
    //affichage des erreurs.
else {
        echo 'ces identifiants sont inconues';
    // var_dump($user);
    }
?>