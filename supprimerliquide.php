<?php
$bdd = new mysqli('localhost', 'root', '', 'vap_store');
if (isset($_GET['idsupprimer'])) {
    $id = $_GET['idsupprimer'];
    $recup = "delete from `e-liquide` where `id-liquide`=$id";
    $result = mysqli_query($bdd, $recup);
    if ($result) {
        header('location:liquide.php');
    } else {
        echo "Aucun article trouvé";
    }
}
if (isset($_GET['idsupprimerdanstout'])) {
    $id = $_GET['idsupprimerdanstout'];
    $recup = "delete from `e-liquide` where `id-liquide`=$id";
    $result = mysqli_query($bdd, $recup);
    if ($result) {
        header('location:index.php');
    } else {
        echo "Aucun article trouvé";
    }
}
