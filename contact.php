<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="image">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/contact.css?t=<? echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>NOUS CONTACTER</title>
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
                    <ul class="navbar-nav ">
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
    <div>
        <h1>Contactez-nous</h1>

    </div>
    <div class="row">
        <div class="col">
            <form class="container-lg">

                <label class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="text" placeholder="nom@exemple.com" required>


                <label class="form-label">Message</label>
                <textarea class="form-control" id="text" rows="3" placeholder="Entrez votre message" required></textarea>

                <input type="submit" name="envoyer" id="btn_envoyer" />
            </form>
        </div>

        <div class="col">
            <p>Vous pouvez nous contactez aussi par:</p>
        </div>
    </div>
</body>

</html>