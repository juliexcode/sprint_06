<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="image">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/table.css" ?t=<? echo time(); ?> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>LES VAPOTEUSES</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark">
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
                                <li><a id="lis-deroulant" class="dropdown-item text-white" href="#">Vapoteuse</a></li>
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
    $bdd = new PDO('mysql:host=localhost;dbname=vap_store', 'root', '');

    $recupvap = $bdd->query('SELECT*FROM vapo');


    ?>
    <h1>Vapoteuse</h1>

    <table class="table table-bordered table-borderless table-hover">
        <thead>
            <tr>
                <th class="text-center"> Référence</th>
                <th class="text-center"> Nom </th>
                <th class="text-center"> Description</th>
                <th class="text-center"> Prix achat</th>
                <th class="text-center"> Prix vente</th>
                <th class="text-center"> Quantité en stock</th>
                <th class="text-center"> Mise à jour</th>
            </tr>
        </thead>
        <?php while ($vapoteuse = $recupvap->fetch()) { ?>

            <tr>
                <th class="text-center"><?= $vapoteuse['reference']; ?></th>
                <td><?= $vapoteuse['nom_article']; ?></td>
                <td><?= $vapoteuse['description']; ?></td>
                <td class="text-center"><?= $vapoteuse['prix_achat']; ?></td>
                <td class="text-center"><?= $vapoteuse['prix_vente']; ?></td>
                <td class="text-center"><?= $vapoteuse['quantite']; ?></td>
                <td class="text-center"><a class="btn" href="supprimer.php?idtout=<?= $vapoteuse['id']; ?>">
                        <button class="delete">
                            &#128465;&#65039;
                        </button>
                    </a>
                    <a class="btn" href="modifier.php?idvapmodifier=<?= $vapoteuse['id']; ?>">
                        <button class="modifier">&#9999;&#65039;</button> </a>
                </td>
            </tr>


        <?php
        }
        ?>
    </table>
</body>

</html>