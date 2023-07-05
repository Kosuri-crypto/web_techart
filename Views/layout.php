<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/headerStyle.css">
        <link rel="stylesheet" href="/css/footerStyle.css">
        <title><?= $title ?></title>
    </head>
    <body>
        <!-- header -->
        <header>
            <div>
                <img src="/img/logo_1.png" alt="logo_1">
                <h1>Галактический вестник</h1>
            </div>
            <div class="line"></div>
            <nav>
                <ul>
                    <?php
                        require_once ('./menu.php');
                        foreach ($menu as $key => $item) {
                            ?><li <?= (($item['title'] == $titleMenu) ? "class=\"selected-li\"" : "") ?>><a href="<?= $item['url'] ?>"><?= $item['title'] ?></a></li><?php
                        }
                    ?>
                </ul>
            </nav>
        </header>

        <!-- content -->
        <?= $content ?>

        <!-- footer -->
        <footer>
            <div id="line"></div>
            <p>© 2023 — 2412 «Галактический вестник»</p>
        </footer>
    </body>
</html>