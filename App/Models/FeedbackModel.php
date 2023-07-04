<?php
namespace App\Models;

use App\DB;
use \PDO;

class FeedbackModel
{
    public static function insertFeedback($name, $message)
    {
        $st = DB::conn()->prepare('INSERT INTO feedback(id,`name`,`message`) VALUES (0,?,?)');
        $st->bindValue(1, $name, PDO::PARAM_STR);
        $st->bindValue(2, $message, PDO::PARAM_STR);
        $st->execute();
    }
}
