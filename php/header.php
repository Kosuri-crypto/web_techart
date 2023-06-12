<header>
    <div>
        <img src="./img/logo_1.png" alt="logo_1">
        <h1>Галактический вестник</h1>
    </div>
    <div class="line"></div>
    <nav>
        <ul>
            <?php
                require ('./php/menu.php');
                foreach ($menu as $key => $item) {
                    ?><li <?= (($item["title"] == $title) ? "class=\"selected-li\"" : "") ?>><a href="<?= $item["url"] ?>"><?= $item["title"] ?></a></li><?php
                }
            ?>
        </ul>
    </nav>
</header>