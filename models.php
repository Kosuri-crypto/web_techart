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
        }

        public static function GetItem()
        {
            $dlc = self::ConnectToDataBase();
        }

        public static function GetId()
        {
            $dlc = self::ConnectToDataBase();
        }
    }


?>