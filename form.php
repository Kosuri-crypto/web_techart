<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задать вопрос</title>
        <link rel="stylesheet" href="./css/header_style.css">
        <link rel="stylesheet" href="./css/footer_style.css">
        <link rel="stylesheet" href="./css/request.css">
        <script src="./js/validation.js"></script>
        <?php
            $name = $_POST['name'] ?? '';
            $message = $_POST['quest'] ?? '';
            $mail = $_POST['mail'] ?? '';
            if ($name != '' && $message != ''){
                require ('./settings.php');
                $dlc = new PDO($DSN,$USER,$PASSWORD);
                $st = $dlc->prepare('INSERT INTO feedback(id,`name`,`message`) VALUES (0,?,?)');
                $st->bindValue(1,$name,PDO::PARAM_STR);
                $st->bindValue(2,$message,PDO::PARAM_STR);
                $st->execute();
                mail($MAILBOX,'Задали вопрос',$name.': <'.$mail.'>: '.$message);
                header('Location: /form.php');
                die();
            }
        ?>
    </head>
    <body>
        <!-- header -->
        <?php
            $title = 'Задать вопрос';
            require ('./php/header.php');
        ?>

        <!-- quest -->
        <main>
            <h1>Задать вопрос</h1>
            <form action="./form.php" method="post" id="form">
                <div>
                    <label for="name">Имя:</label>
                    <input type="text" name="name" id="name" maxlength="64">
                    <p class="name-warn  disable">Неверно введены данные: имя должно начинаться с заглавной буквы</p>
                </div>
                <div>
                    <label for="mail">E-mail:</label>
                    <input type="email" name="mail" id="mail">
                    <p class="mail-warn  disable">Неверно введены данные: e-mail</p>
                </div>
                <div>
                    <label for="quest">Вопрос:</label>
                    <input type="text" name="quest" id="quest" maxlength="300"> <!-- 300 chars -->
                    <!-- <textarea name="quest" id="quest" cols="30" rows="10"></textarea> -->
                    <p class="quest-warn disable">Неверно введены данные: текст вопроса</p>
                </div>
                <input class="submit" id="submit" type="submit" value="Отправить">
            </form>
        </main>
        
        <!-- footer -->
        <?php
            require ('./php/footer.php');
        ?>
    </body>
</html>