<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="image.png">
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
                <a class="navbar-brand " href="index.php"><img src="logo.png"></a>
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
                            <a class="nav-link text-white" href="contact.php">CONTACT</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <?php
    $bdd = new mysqli('109.234.164.161', 'sc1lgvu9627', 'AFCPE-DWWM#2021-RUN', 'sc1lgvu9627_perianmodely-julie.sprint-06');
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $recup = "SELECT*from`vapo` where id=$id";
        $result = mysqli_query($bdd, $recup);
        $row = mysqli_fetch_assoc($result);
        $reference = $row['reference'];
        $nom_article = $row['nom_article'];
        $description = str_replace('<br />', '', $row['description']);
        $prix_achat = $row['prix_achat'];
        $prix_vente = $row['prix_vente'];
        $quantite = $row['quantite'];

        if (isset($_POST['modifier'])) {
            $reference = htmlspecialchars($_POST['reference']);
            $nom_article = htmlspecialchars($_POST['nom_article']);
            $description = nl2br(htmlspecialchars($_POST['description']));
            $prix_achat = htmlspecialchars($_POST['prix_achat']);
            $prix_vente = htmlspecialchars($_POST['prix_vente']);
            $quantite = htmlspecialchars($_POST['quantite']);

            $recup = "Update `vapo` set id=$id,reference='$reference', 
        nom_article='$nom_article', 
        description='$description',
        prix_achat='$prix_achat', prix_vente='$prix_vente',
        quantite='$quantite' where id=$id";
            $result = mysqli_query($bdd, $recup);
            if ($result) {
                header('location:vap.php');
            } else {
                echo "Aucun article trouvé";
            }
        }
    }

    if (isset($_GET['idvapmodifier'])) {
        $id = $_GET['idvapmodifier'];
        $recup = "SELECT*from`vapo` where id=$id";
        $result = mysqli_query($bdd, $recup);
        $row = mysqli_fetch_assoc($result);
        $reference = $row['reference'];
        $nom_article = $row['nom_article'];
        $description = str_replace('<br />', '', $row['description']);
        $prix_achat = $row['prix_achat'];
        $prix_vente = $row['prix_vente'];
        $quantite = $row['quantite'];

        if (isset($_POST['modifier'])) {
            $reference = htmlspecialchars($_POST['reference']);
            $nom_article = htmlspecialchars($_POST['nom_article']);
            $description = nl2br(htmlspecialchars($_POST['description']));
            $prix_achat = htmlspecialchars($_POST['prix_achat']);
            $prix_vente = htmlspecialchars($_POST['prix_vente']);
            $quantite = htmlspecialchars($_POST['quantite']);

            $recup = "Update `vapo` set id=$id,reference='$reference', 
        nom_article='$nom_article', 
        description='$description',
        prix_achat='$prix_achat', prix_vente='$prix_vente',
        quantite='$quantite' where id=$id";
            $result = mysqli_query($bdd, $recup);
            if ($result) {
                header('location:index.php');
            }
        }
    }
    ?>
    <h1>Modifier <?php echo $reference; ?> </h1>
    <div id="forform">
        <form id="formulaire" class="container-lg" method="POST" action="">
            <label>Référence:</label> <br> <input id="champs" class="form-control" type="text" name="reference" value=<?php echo $reference; ?> required autocomplete="off">
            <br>
            <label>Nom de l'article:</label> <br> <input id="champs" class="form-control" type="text" name="nom_article" value=<?php echo $nom_article; ?> required autocomplete="off">
            <br>
            <label>Description de l'article:</label> <br> <textarea id="champs" class="form-control" name="description" required autocomplete="off"> <?php echo $description; ?> </textarea>
            <br>
            <label>Prix d'achat unitaire:</label> <br> <input id="champs" class="form-control" type="number" name="prix_achat" value=<?php echo $prix_achat; ?> required autocomplete="off">
            <br>
            <label>Prix de vente unitaire:</label> <br> <input id="champs" class="form-control" type="number" name="prix_vente" value=<?php echo $prix_vente; ?> required autocomplete="off">
            <br>
            <label>Quantité en stock:</label> <br> <input id="champs" class="form-control" type="number" name="quantite" value=<?php echo $quantite; ?> required autocomplete="off">
            <br>
            <input id="btn_ajout" type="submit" name="modifier" value="Modifier">
        </form>
    </div>
</body>

</html>