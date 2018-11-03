<!DOCTYPE html>
    <head>
        <?php include 'includes/css.php'?>
        <meta charset="UTF-8">
        <title>Accès DB</title>
        <meta name="keywords" content="PHP">
        <meta name="author" content="Baptiste ROSSIGNOL">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'includes/menu.php' ?>
        <div class="container">
            <div class="row">
                <h1><?php echo $this->prenom; ?></h1>
            </div>
            <div class="row">
                <a href="?">Retour</a>
                <?php include 'includes/js.php'?>
            </div>
        </div>
    </body>
</html>
