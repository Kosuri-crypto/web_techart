<?php
use App\Controllers\NewsController;

require_once ('./App/Autoloader.php');

$regExRoot = '{^/?news/?$}';
$regExNews = '{^/?news/?page-([0-9]+)/?$}';
$regExNewsPage = '{^/?news/?([0-9]+)/$}';

$requestURI = $_SERVER['REQUEST_URI'];

$newsController = new NewsController();

switch ($requestURI) {
    case (preg_match($regExRoot, $requestURI) ? true : false):
        $newsController->actionList(1);
        break;
    case (preg_match($regExNews, $requestURI, $matches) ? true : false):
        $newsController->actionList($matches[1]);
        break;
    case (preg_match($regExNewsPage, $requestURI, $matches) ? true : false):
        $newsController->actionDetail($matches[1]);
        break;
    default:
        header('Location: /news/');
        break;
}
