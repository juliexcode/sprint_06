<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styletout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>tout les produits</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark">
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
                                <li><a id="lis-deroulant" class="dropdown-item text-white" href="#">E-liquide</a></li>
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
                            <a class="nav-link text-white" href="stock.php">STOCK</a>
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
    $bdd = new PDO('mysql:host=localhost;dbname=vap_store', 'root', '');

    $recupliquide = $bdd->query('SELECT * FROM `e-liquide`');


    ?>
    <table class="table table-bordered table-borderless table-hover">
        <thead>
            <tr>
                <th> reference</th>
                <th> nom </th>
                <th> description</th>
                <th> prix achat</th>
                <th> prix vente</th>
                <th> quantité en stock</th>
                <th> mise à jour</th>
            </tr>
        </thead>
        <?php while ($liquide = $recupliquide->fetch()) { ?>

            <tr>
                <th><?= $liquide['reference_liquide']; ?></th>
                <td><?= $liquide['nom_article_liquide']; ?></td>
                <td><?= $liquide['description_liquide']; ?></td>
                <td><?= $liquide['prix_achat_liquide']; ?></td>
                <td><?= $liquide['prix_vente_liquide']; ?></td>
                <td><?= $liquide['quantite_liquide']; ?></td>
                <td><a href="supprimerliquide.php?idsupprimer=<?= $liquide['id-liquide']; ?>">
                        <button>supprimer</button>
                    </a>
                    <a href="modifierliquide.php?idmodifier=<?= $liquide['id-liquide']; ?>">
                        <button id="modifier">modifier</button> </a>
                </td>
            </tr>



        <?php
        }
        ?>
    </table>
</body>

</html>