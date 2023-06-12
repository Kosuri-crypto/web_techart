<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/header_style.css">
        <!-- <link rel="stylesheet" href="./css/style.css"> -->
        <link rel="stylesheet" href="./builds/index.css">
        <link rel="stylesheet" href="./css/footer_style.css">
        <!-- Link Swiper's CSS -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> -->
        <link rel="stylesheet" href="./node_modules/swiper/swiper-bundle.min.css">
        <title>Галактический вестник</title>
        <?php
            require ('./settings.php');
            $dlc = new PDO($DSN,$USER,$PASSWORD);
            $page = (isset($_GET['page'])) ? $_GET['page'] : 1; /* OR  $_GET['page'] ?? 1  */
            $st = $dlc->prepare('SELECT id,title,announce,DATE_FORMAT(`date`,\'%d.%m.%Y\') as `date`,`image` FROM news ORDER BY `date` DESC LIMIT ?, ?');
            $st->bindValue(1,($page-1)*$LIMIT,PDO::PARAM_INT);
            $st->bindValue(2,$LIMIT,PDO::PARAM_INT);
            $st->execute();
            $res = $st->fetchAll();
            $number_of_news = ($dlc->query('SELECT COUNT(*) as num FROM news')->fetch())['num'];
            $number_of_pages = ceil($number_of_news / $LIMIT);
        ?>
    </head>
    <body>
        <!-- header -->
        <?php
            $title = 'Главная';
            require ('./php/header.php');
        ?>
        

        <!-- main content -->
        <main>
            <!-- LEGACY >>> swiper
            <div id="gallery-container">
                <img src="./img/ban-image.png" alt="ban-image">
                <div>
                    <h2>Возвращение этнографа</h2>
                    <p>Сегодня с Проксимы вернулась этнографическая экспедиция Джона Голдрама.</p>
                </div>
            </div>
            -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                        foreach ($res as $row) {
                            ?><div class="swiper-slide">
                                <img src="./images_news/<?= $row['image'] ?>" alt="">
                                <div>
                                    <h2><?= $row['title'] ?></h2>
                                    <p><?= $row['announce'] ?></p>
                                </div>
                            </div><?php
                        }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div id="news-main">
                <h2>Новости</h2>
                <div id="news-main-container">
                    <?php
                        foreach ($res as $row) {
                            ?><a class="news-item" href="./news_page.php?id=<?= $row['id'] ?>">
                                <div class="news-date"><p><?= $row['date'] ?></p></div>
                                <h3 class="news-header"><?= $row['title'] ?></h3>
                                <?= $row['announce'] ?><p></p>
                                <div class="news-button">
                                    <p>Подробнее</p>
                                    <img class="arrow1" src="./img/arrow_1.png" alt="">
                                    <img class="arrow2" src="./img/arrow_2.png" alt="">
                                </div>
                            </a><?php
                        }
                    ?>
                </div>
            </div>
            <div class="nav-down">
                <?php
                    for ($i=1; $i <= $number_of_pages; $i++) { 
                        ?><a class=<?= ($page == $i) ? "nav-down-item-active" : "nav-down-item" ?> href="./index.php?page=<?= $i ?>"><p><?= $i ?></p></a><?php
                    }
                ?>
                <a class="nav-down-item2" href="./index.php?page=<?= ($page == $number_of_pages) ? 1 : $page+1 ?>">
                    <img class="arrow1" src="./img/arrow_1.png">
                    <img class="arrow2" src="./img/arrow_2.png">
                </a>
            </div>
        </main>


        <!-- footer -->
        <?php
            require ('./php/footer.php');
        ?>

        <!-- Swiper JS -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
        <script src="./node_modules/swiper/swiper-bundle.min.js"></script>


        <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
            el: ".swiper-pagination",
            },
        });
        </script>
    </body>
</html>
