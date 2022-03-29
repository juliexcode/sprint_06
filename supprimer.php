<?php
include('connectpmyqsly.php');
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
