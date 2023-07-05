<?php
namespace App\Controllers;

use \App\Models\NewsModel;

class NewsController
{
    public $LIMIT = 4;

    public function actionList($page)
    {
        $res = NewsModel::getItems(($page - 1) * $this->LIMIT, $this->LIMIT);
        $numberOfNews = NewsModel::getCount();
        $numberOfPages = ceil($numberOfNews / $this->LIMIT);
        $title = 'Галактический вестник';
        $titleMenu = 'Главная';

        $data = array('res' => $res, 'titleMenu' => $titleMenu, 'title' => $title, 'page' => $page, 'numberOfPages' => $numberOfPages);

        $this->render('list.php', $data);
    }

    public function actionDetail($id)
    {
        $res = NewsModel::getItem($id);
        $title = $res['title'];
        $titleMenu = '';

        $data = array('res' => $res, 'titleMenu' => $titleMenu, 'title' => $title);

        $this->render('detail.php', $data);
    }

    public function render($file, $data)
    {
        extract($data);
        ob_start();
        require ('./Views/news/' . $file);
        $content = ob_get_contents();
        ob_end_clean();
        require ('./Views/layout.php');
    }
}
