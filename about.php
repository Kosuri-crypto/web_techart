<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>О нас</title>
        <link rel="stylesheet" href="./css/header_style.css">
        <link rel="stylesheet" href="./css/footer_style.css">
    </head>
    <body>
        <!-- header -->
        <?php
            $title = 'О нас';
            require ('./php/header.php');
        ?>

        <!-- main / news -->
        <h1>Это страница информации о нас!</h1>
        <p>
            
        </p>
        
        <?php
            /* regular expression */
            $text_var = 'some_variable58';

            $text_dom = 'abc.abc.abc.abc.abc';
            $text_dom_mod = strrev($text_dom);
            
            $text_tel = '122-45-67';
            $text_tel_2 = '+7-(123)-456-78-90';
            
            $regex_var = '{^[a-z_][a-z0-9_]*$}i';
            
            $regex_dom = '{^([a-z0-9][a-z0-9\-]*[a-z0-9]\.){1,2}[a-z0-9][a-z0-9\-]*[a-z0-9]$}i'; /* не сработает если уровней > 3 */ 
            $regex_dom_mod = '{^[a-z0-9][a-z0-9\-]*[a-z0-9](\.[a-z0-9][a-z0-9\-]*[a-z0-9]){1,2}$}i'; /* вариант для перевёрнутой строки */
            
            $regex_tel = '{^[1-9][0-9]{2}(-[0-9]{2}){2}$}';
            $regex_tel_2 = '{^\+[1-9][0-9]*-\([0-9]{3}\)-[0-9]{3}(-[0-9]{2}){2}$}';
            
            $resault = preg_match($regex_tel_2, $text_tel_2);
            /* var_dump($resault); */
            
            $text_sub = 'sdakdhkasjh a=12 djasldjlasjd
                asjdlajsdl b=0 djalsjdlas
                jdlasjdla asdasd=567 dkjas;kd;aslk
            ajsdlajsdk qw=1 jdahskdhask';
            
            $reg_sub = '{([a-z]+)=([0-9]+)}i';
            
            preg_match_all($reg_sub, $text_sub, $matches);
            $collection = $matches[0];
            $keys = $matches[1];
            $values = $matches[2];
            for ($i=0; $i < count($keys); $i++) { 
                echo ('Была найдена переменная '.$keys[$i].' со значением '.$values[$i].';');?><br><?php
            }
            
            /* OOP */
            class Fish
            {
                protected $size;
                public static $legs = 4;

                public function __construct($size)
                {
                    $this->size = $size;
                }

                public function dump()
                {
                    
                    print('<br>Size = '.$this->size.'<br>');
                    print('Legs = '.self::$legs.'<br>');
                    print(static::legsName().'<br>');
                }

                public static function legsName()
                {
                    return 'Плавники';
                }

                
            }

            class Frog extends Fish
            {

                public static function legsName()
                {
                    return 'Лапы';
                }
            }

            $a = new Fish(10);
            $a->dump();

            Fish::$legs = 6;

            $b = new Fish(15);
            $b->dump();

            $c = new Frog(7);
            $c->dump();

            echo '<br><br><br>';
            
        ?>
        
        <div class="button">MyButton</div>

        <!-- footer -->
        <?php
            require ('./php/footer.php');
        ?>
    </body>
</html>