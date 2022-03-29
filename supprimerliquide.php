<?php
$bdd = new mysqli('109.234.164.161', 'sc1lgvu9627', 'AFCPE-DWWM#2021-RUN', 'sc1lgvu9627_perianmodely-julie.sprint-06');
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
