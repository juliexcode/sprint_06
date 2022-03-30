<?php
if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "production") == 0) {
    $bdd = new mysqli('109.234.164.161', $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD'], 'sc1lgvu9627_perianmodely-julie.sprint-06');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $recup = "delete from `vapo` where id=$id";
    $result = mysqli_query($bdd, $recup);
    if ($result) {
        header('location:vap.php');
    } else {
        echo "Aucun article trouvé";
    }
}

if (isset($_GET['idtout'])) {
    $id = $_GET['idtout'];
    $recup = "delete from `vapo` where id=$id";
    $result = mysqli_query($bdd, $recup);
    if ($result) {
        header('location:index.php');
    } else {
        echo "Aucun article trouvé";
    }
}
