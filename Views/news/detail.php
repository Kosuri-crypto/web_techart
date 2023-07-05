<!DOCTYPE html>
<html lang="ru">
    <head>
        <link rel="stylesheet" href="/css/newsPage.css">
    </head>
    <body>
        <!-- main -->
        <main>
            <div class="news-path">
                <b>Главная</b> / <?= $title ?>
            </div>
            <div class="news-container">
                <h1><?= $title ?></h1>
                <div class="news-date"><p><?= $res['date'] ?></p></div>
                <div class="news-content-container">
                    <div class="news-text-container">
                        <h2 class="news-announce"><?= $res['announce'] ?></h2>
                        <div class="news-text">
                            <?= $res['content'] ?>
                        </div>
                        <a class="news-button" href="../">
                            <img class="arrow1" src="./img/arrow_1.png" alt="">
                            <img class="arrow2" src="./img/arrow_2.png" alt="">
                            <p>Назад к новостям</p>
                        </a>
                    </div>
                    <img src="/images_news/<?= $res['image'] ?>" alt="">
                </div>
            </div>
        </main>
    </body>
</html>