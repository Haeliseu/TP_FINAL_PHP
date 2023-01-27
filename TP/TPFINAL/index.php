<?php require_once 'modeleRestaurant.php' ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant</title>
</head>
<body>
<h1>Vos restaurant préférés</h1>
<br>
<?php $modele = new modeleRestaurant(); ?>

<?php $resultat = $modele->getRestaurants(); ?>

<?php foreach ($resultat as $row) { ?>

<div>

    <div>

        <h1><a href=""><?php echo htmlspecialchars($row['nom']); ?></a></h1>

    </div>

    <div>

        <?php echo htmlspecialchars($row['adresse']); ?>

    </div>

    <div>

        <h2>Description</h2>

    </div>

    <div>

        <?php echo htmlspecialchars($row['description']); ?>

    </div>

    <?php
if(isset($_GET['$idRestaurant'])){
    $modele = new modeleRestaurant();

    $resultat = $modele->getAvis(1);

    foreach ($resultat as $row) {
        ?>

        <div> <!-- s'affiche seulement si on est sur la vue d'un restaurant (by id)-->

            <div>

                <h2>Avis</h2>

            </div>

            <div>

                <?php echo htmlspecialchars($row['auteur']); ?>

                <?php echo htmlspecialchars($row['note']); ?>

            </div>

            <div>

                <?php echo htmlspecialchars($row['commentaire']); ?>

            </div>

        </div>
    <?php } ?>
</div>
<?php }} ?>

</body>
</html>
