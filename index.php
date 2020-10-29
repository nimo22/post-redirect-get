<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $nom = $_POST['username'];
    $prenom = $_POST['nomdefamille'];
    $erreur = [];
    if (empty($nom)) {
        array_push($erreur, "votre nom est vide");
    }
    if (empty($prenom)) {
        array_push($erreur, "votre nom de famille est vide");
    }
    $choixdetarif = $_POST['choix'];
    if (count($choixdetarif) != 1) {
        array_push($erreur, "vous devez choisir un choix ");
    }else{
    $choixdetarif=$choixdetarif[0];
    }
    if (count($erreur) != 0) {
       foreach($erreur as $erreur){
        echo $erreur."<br>";
        count($erreur);
       }
     } else {
        header('location:etape1.php');
        setcookie('username', $nom);
        setcookie('nomdefamille', $prenom);
        setcookie('choix',$choixdetarif);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <?php include 'traiteurPhP.php'; ?>

</head>

<body>

    <h1>bienvenu au restaurant de <span>aire</span> xyz</h1>
    <form method="POST">
        <label for="username">votre nom</label><br>
        <input type="text" id="username" name="username" <?= $nom!=" "? "value=$nom" :""?>><br>
        <label for="nomdefamille">nom de famille</label><br>
        <input type="text" name="nomdefamille" id="nomdefamille" <?= $prenom!=" "? "value=$prenom" :""?>><br>
        <?php foreach ($tarrife as $data) : ?>
        <label for="choix"><?= $data ?></label>
        <input type="checkbox" name="choix[]" value="<?= $data ?>" id="choix"
            <?php if (in_array($data, $choixdetarif)) : ?> <?= 'checked'; ?> <?php endif; ?>>
        <?php endforeach; ?>
        <br>
        <input type="submit" id="submit">

    </form>
</body>

</html>