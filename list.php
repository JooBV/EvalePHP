<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="css/create.css">

    <title>Bibliotheque</title>
</head>

<body>

    <header class="page-haute">
        <h1>Bibliotheque</h1>
    </header>


    <table class="contener">
        <tr class="liste-livre">
            <td rowspan="1">#</td>
            <td>Titre</td>
            <td>Synopsis</td>
            <td>Auteur</td>
            <td>Action</td>
        </tr>
    </table>

    <?php
    $requect = $conn->query('SELECT * FROM Livre');
    // $resulte = $conn->query('SELECT * FROM Livre INNER JOIN auteur ON Livre.id_auteur = auteur.id');

    $rep = $requect->fetchAll();
    foreach ($rep as $row) {
    }
    ?>

    <tr class="liste-livre">
        <td><?= $row['titre'] ?></td>
        <td><?= $row['synopsis'] ?></td>
        <td><?= $row['id_auteur'] ?></td>
        <td><?= $row['id'] ?></td>
    </tr>

        <?php
        require_once 'create.php';
        ?>



</body>

</html>