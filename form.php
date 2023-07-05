<?php
require_once ('./App/Autoloader.php');
require_once ('./settings.php');

use App\Models\FeedbackModel;

$name = $_POST['name'] ?? '';
$message = $_POST['quest'] ?? '';
$mail = $_POST['mail'] ?? '';
if ($name != '' && $message != '') {
    FeedbackModel::insertFeedback($name, $message);
    mail($MAILBOX, 'Задали вопрос', $name . ': <' . $mail . '>: ' . $message);
    header('Location: /form.php');
    die();
}

$title = 'Задать вопрос';

$titleView = $title;
$styleView = 'request';
$contentView = 'formPageView.php';

require ('./tmp/templateView.php');
