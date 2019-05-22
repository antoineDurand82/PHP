<?php include_once ('./bdd.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        $query = $pdo->prepare('SELECT name FROM spawn');
        $query->execute();
        $nspawn = $query->fetchAll();
    ?>

    <title>Admin</title>
</head>
<body>

<p> Liste des spawns existant </p>
<ul>
<?php
foreach($nspawn as $namespawn)
{
    echo '<li> ' . $namespawn['name'] . '</li>';
}
?>
</ul>


</body>
</html>