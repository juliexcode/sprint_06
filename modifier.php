<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier</title>
</head>

<body>
    <?php
    $bdd = new mysqli('localhost', 'root', '', 'vap_store');
    $id = $_GET['id'];
    $recup = "SELECT*from`vapo` where id=$id";
    $result = mysqli_query($bdd, $recup);
    $row = mysqli_fetch_assoc($result);
    $reference = $row['reference'];
    $nom_article = $row['nom_article'];
    $description = $row['description'];
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
            echo "modifier";
            header('location:produit.php');
        } else {
            echo "Aucun article trouvé";
        }
    }


    ?>
    <div>
        <form method="POST" action="">
            <label>Référence</label> <br> <input type="text" name="reference" value=<?php echo $reference; ?>>
            <br>
            <label>Nom de l'article</label> <br> <input type="text" name="nom_article" value=<?php echo $nom_article; ?>>
            <br>
            <label>Description de l'article</label> <br> <textarea name="description"> <?php echo $description; ?></textarea>
            <br>
            <label>Prix d'achat unitaire</label> <br> <input type="number" name="prix_achat" value=<?php echo $prix_achat; ?>>
            <br>
            <label>Prix de vente unitaire</label> <br> <input type="number" name="prix_vente" value=<?php echo $prix_vente; ?>>
            <br>
            <label>Quantité en stock</label> <br> <input type="number" name="quantite" value=<?php echo $quantite; ?>>
            <br>
            <input type="submit" name="modifier" value="Modifier">
        </form>
    </div>
</body>

</html>