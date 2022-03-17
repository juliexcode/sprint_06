<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>ajoter vapoteuse</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produits
                            </a>
                            <ul id="deroulant" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a id="lis-deroulant" class="dropdown-item" href="produit.php">tout</a></li>
                                <li><a id="lis-deroulant" class="dropdown-item" href="#">Vapoteuse</a></li>
                                <li><a id="lis-deroulant" class="dropdown-item" href="#">E-liquide</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ajouter des produits
                            </a>
                            <ul id="deroulant" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a id="lis-deroulant" class="dropdown-item" href="ajoutvap.php">Vapoteuse</a></li>
                                <li><a id="lis-deroulant" class="dropdown-item" href="#">E-liquide</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stock.php">stock</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">membres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
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
                echo "produit ajouter";
            } else {
                echo "Veuillez compléter tous les champs...";
            }
        }
        ?>
        <div>
            <form method="POST" action="">
                <label>Référence</label> <br> <input type="text" name="reference">
                <br>
                <label>Nom de l'article</label> <br> <input type="text" name="nom_article">
                <br>
                <label>Description de l'article</label> <br> <textarea name="description"></textarea>
                <br>
                <label>Prix d'achat unitaire</label> <br> <input type="number" name="prix_achat">
                <br>
                <label>Prix de vente unitaire</label> <br> <input type="number" name="prix_vente">
                <br>
                <label>Quantité en stock</label> <br> <input type="number" name="quantite">
                <br>
                <input type="submit" name="ajouter">
            </form>
        </div>
</body>

</html>