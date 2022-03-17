<?php
$bdd = new mysqli('localhost', 'root', '', 'vap_store');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $recup = "delete from `vapo` where id=$id";
    $result = mysqli_query($bdd, $recup);
    if ($result) {
        header('location:produit.php');
    } else {
        echo "Aucun article trouvé";
    }
}
