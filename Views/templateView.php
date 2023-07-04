<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/headerStyle.css">
        <link rel="stylesheet" href="/css/footerStyle.css">
        <link rel="stylesheet" href="/css/<?= $styleView ?>.css">
        <title><?= $titleView ?></title>
    </head>
    <body>
        <!-- header -->
        <?php
            require ('./Views/header.php');
        ?>

        <!-- main -->
        <?php
            require ('./Views/' . $contentView);
        ?>

        <!-- footer -->
        <?php
            require ('./Views/footer.php');
        ?>
    </body>
</html>