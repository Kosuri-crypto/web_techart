<?php
use App\Models\NewsModel;

require_once ('./App/Autoloader.php');
require_once ('./settings.php');

$row = NewsModel::getItem($_GET['id']);
$title_news = $row['title'];
$title = '';

$titleView = $title_news;
$namePage = 'newsPage';
$contentView = $namePage . 'View.php';
$styleView = $namePage;
