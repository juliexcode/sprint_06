<!-- <?php
        session_start();
        if ($_SESSION['mdp']) {
            header('location: connexion.php');
        }
        ?>
index -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de connexion</title>
</head>

<body>
    <form method="POST" action="" align="center">
        <input type="text" name="pseudo" autocomplete="off">
        <br>
        <input type="password" name="mdp">
        <br>
        <input type="submit" name="valider">
    </form>

    <?php
    session_start();
    if (isset($_POST['valider'])) {
        if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
            $pseudo_defaut = "admin";
            $mdp_defaut = "1234";

            $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
            $mdp_saisi = htmlspecialchars($_POST['mdp']);
            if ($pseudo_saisi == $pseudo_defaut && $mdp_saisi == $mdp_defaut) {
                $_SESSION['mdp'] = $mdp_saisi;
                // header('location: index.php');
            } else {
                echo 'Votre mot de passe ou votre pseudo est incorrect...';
            }
        } else {
            echo 'Veuillez compléter tous les champs...';
        }
    }
    ?>
</body>

</html>