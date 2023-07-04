<?php
namespace App;

use PDO;

class DB
{
    public static $dlc = null;

    public static function conn()
    {
        if (self::$dlc === null) {
            require ('./settings.php');
            self::$dlc = new PDO($DSN, $USER, $PASSWORD);
        }
        return self::$dlc;
    }
}
