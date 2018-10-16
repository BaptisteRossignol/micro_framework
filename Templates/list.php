<!DOCTYPE html>
    <head>
        <?php include 'includes/css.php'?>
        <meta charset="UTF-8">
        <title>Liste</title>
        <meta name="keywords" content="PHP">
        <meta name="author" content="Baptiste ROSSIGNOL">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'includes/menu.php' ?>
        <div class="container">
            <div class="row">
                <h1>Voici une liste</h1>
            </div>
            <div class="row">
                <ul>
                    <?php foreach ($this->items as $item) {
                        echo sprintf('<li>%s</li>', $item);
                        }
                    ?>
                </ul>
            </div>
            <a href="?">Retour</a>
            <?php include 'includes/js.php'?>
        </div>
    </body>
</html>
