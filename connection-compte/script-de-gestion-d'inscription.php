<?php 
//j'inclus ma bdd.
include_once ('pdo.php');

@$firstName = User_control ($_POST['prénom']);


@$lastName = User_control ($_POST['Nom']);


@$EMail = User_control ($_POST['email']);


@$PassWord = User_control ($_POST['mot-de-passe']);


@$PassWordConfirm = User_control ($_POST['password-confirm']);

function User_control ($données) {
    $données = trim ($données);
    $données = stripslashes ($données);
    $données = htmlspecialchars ($données);
    return $données;
}


    if(empty($firstName)) {
        echo 'Merci de renseigner votre prénom.';
    }else if(empty($lastName)) {
        echo 'merci de renseigner le nom.';
    }else if (empty($EMail)) {
        echo 'email non renseigné.';
    }else if (strlen($PassWord) <= 8) {
        echo 'mot de passe trop court ou non renseigné.';
    }
    else if ($PassWord !== $PassWordConfirm) {
        echo 'la confirmation du mot de passe difère du mot de passe.';
    }else {
$sql = "INSERT INTO comptes (id, firstname, lastname,mail, password) VALUES ('','$firstName','$lastName','$EMail','$PassWord')";
$dsn->exec($sql);
    header("Refresh:5; Location:form connection.php");
    echo 'compte créer avec succes vous pouvez vous connecter.';
}
?>