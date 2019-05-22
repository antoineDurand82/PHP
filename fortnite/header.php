<?php include_once ('./bdd.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        $query = $pdo->prepare('SELECT * FROM spawn');
        $query->execute();
        $spawn = $query->fetchAll();
    ?>

    <title>Fortnite</title>
</head>