<!DOCTYPE html>
    <head>
        <?php include 'includes/css.php'?>
        <meta charset="UTF-8">
        <title>Index</title>
        <meta name="keywords" content="PHP">
        <meta name="author" content="Baptiste ROSSIGNOL">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'includes/menu.php' ?>
        <div class="container">
            <div class="row">
                <h1>Bonjour <?php echo $this->name; ?></h1>
            </div>
            <div class="row">
                <ul>Ouvrir les différentes URL
                    <li><a href="?controller=index&action=index">Index</a></li>
                    <li><a href="?controller=index&action=page">Page</a></li>
                    <li><a href="?controller=index&action=list">Liste</a></li>
                    <li><a href="?controller=index&action=your_choice">NotFound</a></li>
                    <li><a href="?controller=perso&action=page">Page perso</a></li>
                </ul>
                <a href="?"></a>
                <?php include 'includes/js.php'?>
            </div>
        </div>
    </body>
</html>
