<?php


    class NewsModel
    {
        private static function ConnectToDataBase()
        {
            require ('./settings.php');
            return new PDO($DSN,$USER,$PASSWORD);
        }

        public static function GetCount()
        {
            $dlc = self::ConnectToDataBase();
            $number_of_news = ($dlc->query('SELECT COUNT(*) as num FROM news')->fetch())['num'];
            return $number_of_news;
        }

        public static function GetItem($id)
        {
            $dlc = self::ConnectToDataBase();
            $st = $dlc->prepare('SELECT title,announce,DATE_FORMAT(`date`,\'%d.%m.%Y\') as `date`,content,`image` FROM news WHERE id=?');
            $st->bindValue(1,$id,PDO::PARAM_INT);
            $st->execute();
            $row = $st->fetch();
            return $row;
        }

        public static function GetItems($from, $limit)
        {
            $dlc = self::ConnectToDataBase();
            $st = $dlc->prepare('SELECT id,title,announce,DATE_FORMAT(`date`,\'%d.%m.%Y\') as `date`,`image` FROM news ORDER BY `date` DESC LIMIT ?, ?');
            $st->bindValue(1,$from,PDO::PARAM_INT);
            $st->bindValue(2,$limit,PDO::PARAM_INT);
            $st->execute();
            $res = $st->fetchAll();
            return $res;
        }
    }


?>