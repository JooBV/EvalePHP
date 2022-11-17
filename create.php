<?php
include "connect.php";

$valid = true;
$err = array();

if (isset($_POST['submit'])) {
    $titre = trim($_POST['titre']);
    $synopsis = trim($_POST['synopsis']);
    $auteur = trim($_POST['auteur']);

    if (!isset($_POST['titre'])) {
        $valid = false;
        $err['titre'] = " Ce champ en peut pas être vide";
    }

    if (!isset($_POST['synopsis'])) {
        $valid = false;
        $err['pseudojoueur'] = " Ce champ ne peut pas être vide";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/create.css">

    <title>Create</title>
</head>

<body>
    <div class="general-container">
        <div class="full-container">

            <!-- Debut du form -->

            <form action="" class="container-form">

                <!-- Titre du livre -->

                <div>
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" value="<?php if (isset($titre)) {echo $titre;} ?>" class="input" placeholder="Titre du livre" />
                </div>

                <!-- Synopsis -->

                <div>
                    <label for="titre">Synopsis</label>
                    <input type="text" id="synopsis" name="synopsis" value="" class="input" placeholder="Récit très bref" />
                </div>

                <!-- Auteur du livre -->

                <div>
                    <label for="phone">Auteur</label>
                    <input type="text" id="auteur" name="auteur" value="" class="input" placeholder="Auteur du livre" />
                </div>

                <!-- Date -->

                <div>
                    <label for="date">Pickup Date/Time</label>
                    <input type="date" id="date" name="date" value="" class="date" class="input">
                </div>

                <!-- Titre Action -->

                <div>
                    <label for="titre">Action</label>
                    <input type="text" id="action" name="action" value="" class="input" placeholder="Titre du livre" />
                </div>

                <div class="button">
                    <button name="submit" type="submit">Submit Book</button>
                </div>
        </div>

        <!-- Fin du button envoyer -->

</body>

</html>