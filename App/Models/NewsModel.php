<?php
namespace App\Models;

use App\DB;
use PDO;

class NewsModel
{
    public static function getCount()
    {
        $number_of_news = (DB::conn()->query('SELECT COUNT(*) as num FROM news')->fetch())['num'];
        return $number_of_news;
    }

    public static function getItem($id)
    {
        $st = DB::conn()->prepare('SELECT title,announce,DATE_FORMAT(`date`,\'%d.%m.%Y\') as `date`,content,`image` FROM news WHERE id=?');
        $st->bindValue(1, $id, PDO::PARAM_INT);
        $st->execute();
        $row = $st->fetch();
        return $row;
    }

    public static function getItems($from, $limit)
    {
        $st = DB::conn()->prepare('SELECT id,title,announce,DATE_FORMAT(`date`,\'%d.%m.%Y\') as `date`,`image` FROM news ORDER BY `date` DESC LIMIT ?, ?');
        $st->bindValue(1, $from, PDO::PARAM_INT);
        $st->bindValue(2, $limit, PDO::PARAM_INT);
        $st->execute();
        $res = $st->fetchAll();
        return $res;
    }
}
