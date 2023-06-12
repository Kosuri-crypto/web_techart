<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/header_style.css">
        <link rel="stylesheet" href="./css/footer_style.css">
        <link rel="stylesheet" href="./css/news_page.css">
        <?php  
            require ('./models.php');
            $row = NewsModel::GetItem($_GET['id']);
            $title_news = $row['title'];
        ?>
        <title><?= $title_news ?></title>
    </head>
    <body>
        <!-- header -->
        <?php
            $title = '';
            require ('./php/header.php');
        ?>

        <!-- / news -->
        <main>
            <div class="news-path">
                <b>Главная</b> / <?= $title_news ?>
            </div>
            <div class="news-container">
                <h1><?= $title_news ?></h1>
                <div class="news-date"><p><?= $row['date'] ?></p></div>
                <div class="news-content-container">
                    <div class="news-text-container">
                        <h2 class="news-announce"><?= $row['announce'] ?></h2>
                        <div class="news-text">
                            <?= $row['content'] ?>
                        </div>
                        <a class="news-button" href="./">
                            <img class="arrow1" src="./img/arrow_1.png" alt="">
                            <img class="arrow2" src="./img/arrow_2.png" alt="">
                            <p>Назад к новостям</p>
                        </a>
                    </div>
                    <img src="./images_news/<?= $row['image'] ?>" alt="">
                </div>
            </div>
        </main>

        <!-- footer -->
        <?php
            require ('./php/footer.php');
        ?>
    </body>
</html>