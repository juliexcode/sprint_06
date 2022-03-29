
<?php

if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "production") == 0) {
    $bdd = new PDO('mysql:host=109.234.164.161;dbname=sc1lgvu9627_perianmodely-julie.sprint-06', $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD']);
}
?>