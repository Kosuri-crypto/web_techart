<?php
namespace Controllers;

use \App\Models\NewsModel;

require_once ('./App/Autoloader.php');

class NewsController
{
    public function actionList($page)
    {
        require_once ('./settings.php');

        $titleView = 'Галактический вестник';
        //$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $res = NewsModel::getItems(($page - 1) * $LIMIT, $LIMIT);
        $numberOfNews = NewsModel::getCount();
        $numberOfPages = ceil($numberOfNews / $LIMIT);
        $title = 'Главная';

        $contentView = 'indexView.php';
        $styleView = 'style';

        require ('./Views/templateView.php');
    }

    public function actionDetail($id)
    {
        require_once ('./settings.php');

        //$row = NewsModel::getItem($_GET['id']);
        $row = NewsModel::getItem($id);
        $title_news = $row['title'];
        $title = '';

        $titleView = $title_news;
        $namePage = 'newsPage';
        $contentView = $namePage . 'View.php';
        $styleView = $namePage;

        require ('./Views/templateView.php');
    }
}
