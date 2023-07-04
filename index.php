<?php
use Controllers\NewsController;

$regExRoot = '{^/?news/?$}';
$regExNews = '{^/?news/?page-([0-9]+)/?$}';
$regExNewsPages = '{^/?news/?([0-9]+)/$}';

$requestURI = $_SERVER['REQUEST_URI'];

$controller = new NewsController();

switch ($requestURI) {
    case (preg_match($regExRoot, $requestURI) ? true : false):
        //$page = 1;
        $controller->actionList(1);
        break;
    case (preg_match($regExNews, $requestURI, $matches) ? true : false):
        //$page = $matches[1];
        $controller->actionList($matches[1]);
        break;
    case (preg_match($regExNewsPages, $requestURI, $matches) ? true : false):
        //$id = $matches[1];
        $controller->actionDetail($matches[1]);
        break;
    default:
        header('Location: /news/');
        break;
}
