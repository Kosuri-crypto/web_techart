<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="/node_modules/swiper/swiper-bundle.min.css">
<main>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
                foreach ($res as $row) {
                    ?><div class="swiper-slide">
                        <img src="/images_news/<?= $row['image'] ?>" alt="">
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
                    ?><a class="news-item" href="/news/<?= $row['id'] ?>/">
                        <div class="news-date"><p><?= $row['date'] ?></p></div>
                        <h3 class="news-header"><?= $row['title'] ?></h3>
                        <?= $row['announce'] ?><p></p>
                        <div class="news-button">
                            <p>Подробнее</p>
                            <img class="arrow1" src="/img/arrow_1.png" alt="">
                            <img class="arrow2" src="/img/arrow_2.png" alt="">
                        </div>
                    </a><?php
                }
            ?>
        </div>
    </div>
    <div class="nav-down">
        <?php
            for ($i=1; $i <= $numberOfPages; $i++) { 
                ?><a class=<?= ($page == $i) ? "nav-down-item-active" : "nav-down-item" ?> href="/news/<?= ($i == 1) ? "" : "page-" . $i . "/"?>"><p><?= $i ?></p></a><?php
            }
            if ($page != $numberOfPages) {
                ?><a class="nav-down-item2" href="/news/page-<?= $page+1 ?>/">
                    <img class="arrow1" src="/img/arrow_1.png">
                    <img class="arrow2" src="/img/arrow_2.png">
                </a><?php
            }
        ?>
    </div>
</main>

<!-- Swiper JS -->
<script src="/node_modules/swiper/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    pagination: {
    el: ".swiper-pagination",
    },
});
</script>
