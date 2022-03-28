<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="image">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/ajout.css?t=<? echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>modifier</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand " href="index.php"><img src="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PRODUITS
                            </a>
                            <ul id="deroulant" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a id="lis-deroulant" class="dropdown-item text-white" href="index.php">Tout</a></li>
                                <li><a id="lis-deroulant" class="dropdown-item text-white" href="vap.php">Vapoteuse</a></li>
                                <li><a id="lis-deroulant" class="dropdown-item text-white" href="liquide.php">E-liquide</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                AJOUTER DES PRODUITS
                            </a>
                            <ul id="deroulant" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a id="lis-deroulant" class="dropdown-item text-white" href="ajoutvap.php">Vapoteuse</a></li>
                                <li><a id="lis-deroulant" class="dropdown-item text-white" href="ajoutliquide.php">E-liquide</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">CONTACT</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <?php
    $bdd = new mysqli('localhost', 'root', '', 'vap_store');
    if (isset($_GET['idmodifier'])) {
        $id = $_GET['idmodifier'];
        $recup = "SELECT*from`e-liquide` where `id-liquide`=$id";
        $result = mysqli_query($bdd, $recup);
        $row = mysqli_fetch_assoc($result);
        $reference = $row['reference_liquide'];
        $nom_article = $row['nom_article_liquide'];
        $description = str_replace('<br />', '', $row['description_liquide']);
        $prix_achat = $row['prix_achat_liquide'];
        $prix_vente = $row['prix_vente_liquide'];
        $quantite = $row['quantite_liquide'];

        if (isset($_POST['modifier'])) {
            $reference = htmlspecialchars($_POST['reference_liquide']);
            $nom_article = htmlspecialchars($_POST['nom_article_liquide']);
            $description = nl2br(htmlspecialchars($_POST['description_liquide']));
            $prix_achat = htmlspecialchars($_POST['prix_achat_liquide']);
            $prix_vente = htmlspecialchars($_POST['prix_vente_liquide']);
            $quantite = htmlspecialchars($_POST['quantite_liquide']);

            $recup = "Update `e-liquide` set `id-liquide`=$id,reference_liquide='$reference', 
        nom_article_liquide='$nom_article', 
        description_liquide='$description',
        prix_achat_liquide='$prix_achat', prix_vente_liquide='$prix_vente',
        quantite_liquide='$quantite' where `id-liquide`=$id";
            $result = mysqli_query($bdd, $recup);
            if ($result) {
                echo "modifier";
                header('location:liquide.php');
            }
        }
    }

    if (isset($_GET['idmodifierliquidedanstout'])) {
        $id = $_GET['idmodifierliquidedanstout'];
        $recup = "SELECT*from`e-liquide` where `id-liquide`=$id";
        $result = mysqli_query($bdd, $recup);
        $row = mysqli_fetch_assoc($result);
        $reference = $row['reference_liquide'];
        $nom_article = $row['nom_article_liquide'];
        $description = str_replace('<br />', '', $row['description_liquide']);
        $prix_achat = $row['prix_achat_liquide'];
        $prix_vente = $row['prix_vente_liquide'];
        $quantite = $row['quantite_liquide'];

        if (isset($_POST['modifier'])) {
            $reference = htmlspecialchars($_POST['reference_liquide']);
            $nom_article = htmlspecialchars($_POST['nom_article_liquide']);
            $description = nl2br(htmlspecialchars($_POST['description_liquide']));
            $prix_achat = htmlspecialchars($_POST['prix_achat_liquide']);
            $prix_vente = htmlspecialchars($_POST['prix_vente_liquide']);
            $quantite = htmlspecialchars($_POST['quantite_liquide']);

            $recup = "Update `e-liquide` set `id-liquide`=$id,reference_liquide='$reference', 
        nom_article_liquide='$nom_article', 
        description_liquide='$description',
        prix_achat_liquide='$prix_achat', prix_vente_liquide='$prix_vente',
        quantite_liquide='$quantite' where `id-liquide`=$id";
            $result = mysqli_query($bdd, $recup);
            if ($result) {
                echo "modifier";
                header('location:index.php');
            }
        }
    }

    ?>
    <h1>Modifier <?php echo $reference; ?> </h1>
    <div id="forform">
        <form id="formulaire" class="container-lg" method="POST" action="">
            <label>Référence:</label> <br> <input id="champs" class="form-control" type="text" name="reference_liquide" value=<?php echo $reference; ?> required autocomplete="off">
            <br>
            <label>Nom de l'article:</label> <br> <input id="champs" class="form-control" type="text" name="nom_article_liquide" value=<?php echo $nom_article; ?> required autocomplete="off">
            <br>
            <label>Description de l'article:</label> <br> <textarea id="champs" class="form-control" name="description_liquide" required autocomplete="off"> <?php echo $description; ?></textarea>
            <br>
            <label>Prix d'achat unitaire:</label> <br> <input id="champs" class="form-control" type="number" name="prix_achat_liquide" value=<?php echo $prix_achat; ?> required autocomplete="off">
            <br>
            <label>Prix de vente unitaire:</label> <br> <input id="champs" class="form-control" type="number" name="prix_vente_liquide" value=<?php echo $prix_vente; ?> required autocomplete="off">
            <br>
            <label>Quantité en stock:</label> <br> <input id="champs" class="form-control" type="number" name="quantite_liquide" value=<?php echo $quantite; ?> required autocomplete="off">
            <br>
            <input id="btn_ajout" type="submit" name="modifier" value="Modifier">
        </form>
    </div>
</body>

</html>