<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Accueil</title>
</head>

<body>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=vap_store', 'root', '');
    ?>
    <header>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LOGO</a>
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

    </header>
</body>

</html>