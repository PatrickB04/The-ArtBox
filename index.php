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

    <?php include('includes/oeuvres.php'); ?>
    <?php include('includes/header.php'); ?>

    <main>
        <div id="liste-oeuvres">
            <!-- Boucle sur les oeuvres -->
            <?php foreach ($oeuvres as $oeuvre) : ?>
                <!-- si la clé existe et a pour valeur "vrai", on affiche -->
                <?php if (array_key_exists('is_enabled', $oeuvre) && $oeuvre['is_enabled'] == true) : ?>

                    <article class="oeuvre">
                        <a href="detail.php?id=<?php echo $oeuvre['id']; ?>">
                            <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                            <h2><?php echo $oeuvre['titre']; ?></h2>
                            <p class="description"><?php echo $oeuvre['auteur']; ?></p>
                        </a>
                    </article>

                <?php endif; ?>
            <?php endforeach ?>
        </div>
    </main>

    <?php include('includes/footer.php'); ?>

</body>

</html>