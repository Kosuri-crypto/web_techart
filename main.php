<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Новости</title>
        <link rel="stylesheet" href="./css/header_style.css">
        <link rel="stylesheet" href="./css/footer_style.css">
    </head>
    <body>
        <!-- header -->
        <?php
            $title = 'Главная';
            require ('./View/header.php');
        ?>

        <!-- main / news -->
        <h1>main</h1>

        <!-- footer -->
        <?php
            require ('./View/footer.php');
        ?>
    </body>
</html>