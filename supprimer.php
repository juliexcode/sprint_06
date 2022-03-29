<?php
$bdd = new mysqli('109.234.164.161', 'sc1lgvu9627', 'AFCPE-DWWM#2021-RUN', 'sc1lgvu9627_perianmodely-julie.sprint-06');
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
