<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/ajout.css?t=<? echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>AJOUTER UNE VAPOTEUSE</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand " href="#">LOGO</a>
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
                                <li><a id="lis-deroulant" class="dropdown-item text-white" href="#">Vapoteuse</a></li>
                                <li><a id="lis-deroulant" class="dropdown-item text-white" href="ajoutliquide.php">E-liquide</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">MEMBRES</a>
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
    if (isset($_POST['ajouter'])) {
        if (
            !empty($_POST['reference']) &&
            !empty($_POST['nom_article']) &&
            !empty($_POST['description']) &&
            !empty($_POST['prix_achat']) &&
            !empty($_POST['prix_vente']) &&
            !empty($_POST['quantite'])
        ) {
            $reference = htmlspecialchars($_POST['reference']);
            $nom_article = htmlspecialchars($_POST['nom_article']);
            $description = nl2br(htmlspecialchars($_POST['description']));
            $prix_achat = htmlspecialchars($_POST['prix_achat']);
            $prix_vente = htmlspecialchars($_POST['prix_vente']);
            $quantite = htmlspecialchars($_POST['quantite']);

            $inservap = "insert into `vapo` (reference, nom_article, description,prix_achat, prix_vente,quantite)
            values('$reference', '$nom_article', '$description', '$prix_achat', '$prix_vente', '$quantite')";
            $result = mysqli_query($bdd, $inservap);
    ?>
            <div class="container-lg">
                <p id="new" class="container-lg">Nouvelle <a id="lien" href="vap.php">vapoteuse</a> ajouter au stock</p>
            </div>
    <?php
        } else {
            echo "Veuillez compléter tous les champs...";
        }
    }
    ?>


    <h1>AJOUTER UNE VAPOTEUSE</h1>
    <div id="forform">
        <form id="formulaire" class="container-lg" method="POST" action="">
            <label class="form-label">Référence:</label> <br> <input id="champs" class="form-control" type="text" name="reference" placeholder="Entrer la référence du produit" required autocomplete="off">
            <br>
            <label class="form-label">Nom de l'article:</label> <br> <input id="champs" class="form-control" type="text" name="nom_article" placeholder="Entrer le nom du produit" required autocomplete="off">
            <br>
            <label class="form-label">Description de l'article:</label> <br> <textarea id="champs" class="form-control" name="description" placeholder="Entrer la description du produit" required></textarea>
            <br>
            <label class="form-label">Prix d'achat unitaire:</label> <br> <input id="champs" class="form-control" type="number" name="prix_achat" placeholder="Entrer le prix d'achat du produit en €" required autocomplete="off">
            <br>
            <label class="form-label">Prix de vente unitaire:</label> <br> <input id="champs" class="form-control" type="number" name="prix_vente" placeholder="Entrer le prix de vente du produit en €" required autocomplete="off">
            <br>
            <label class="form-label">Quantité en stock:</label> <br> <input id="champs" class="form-control" type="number" name="quantite" placeholder="Entrer le nombre de stock" required autocomplete="off">
            <br>
            <input id="btn_ajout" type="submit" name="ajouter">
        </form>
    </div>
</body>

</html>