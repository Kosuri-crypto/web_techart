<?php
use App\Models\NewsModel;

function index() {

    require_once ('./App/Autoloader.php');
    require_once ('./settings.php');

    $titleView = 'Галактический вестник';
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
    $res = NewsModel::getItems(($page - 1) * $LIMIT, $LIMIT);
    $numberOfNews = NewsModel::getCount();
    $numberOfPages = ceil($numberOfNews / $LIMIT);
    $title = 'Главная';

    $contentView = 'indexView.php';
    $styleView = 'style';

    require ('./Views/templateView.php');
};
