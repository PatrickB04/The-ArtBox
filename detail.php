<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>


    <?php include('includes/header.php'); ?>
    <?php include('includes/oeuvres.php'); ?>

    <?php $id = $_GET['id']; ?>

    <?php foreach ($oeuvres as $oeuvre) {
        if ($oeuvre['id'] == $id) {
            break;
        }
    }
    ?>

    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $oeuvre['titre']; ?></h1>
                <p class="description"><?php echo $oeuvre['auteur']; ?></p>
                <p class="description-complete"><?php echo $oeuvre['description']; ?></p>
            </div>
        </article>
    </main>

    <?php include('includes/footer.php'); ?>

</body>

</html>