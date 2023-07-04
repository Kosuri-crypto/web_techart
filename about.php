<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>О нас</title>
        <link rel="stylesheet" href="./css/headerStyle.css">
        <link rel="stylesheet" href="./css/footerStyle.css">
    </head>
    <body>
        <!-- header -->
        <?php
            $title = 'О нас';
            require ('./Views/header.php');
        ?>

        <!-- main / news -->
        <h1>Это страница информации о нас!</h1>
        <p>
            
        </p>
        
        <?php
            /* regular expression */
            $textVar = 'some_variable58';

            $textDom = 'abc.abc.abc.abc.abc';
            $textDomMod = strrev($textDom);
            
            $textTel = '122-45-67';
            $textTel2 = '+7-(123)-456-78-90';
            
            $regexVar = '{^[a-z_][a-z0-9_]*$}i';
            
            $regexDom = '{^([a-z0-9][a-z0-9\-]*[a-z0-9]\.){1,2}[a-z0-9][a-z0-9\-]*[a-z0-9]$}i'; /* не сработает если уровней > 3 */ 
            $regexDomMod = '{^[a-z0-9][a-z0-9\-]*[a-z0-9](\.[a-z0-9][a-z0-9\-]*[a-z0-9]){1,2}$}i'; /* вариант для перевёрнутой строки */
            
            $regexTel = '{^[1-9][0-9]{2}(-[0-9]{2}){2}$}';
            $regexTel2 = '{^\+[1-9][0-9]*-\([0-9]{3}\)-[0-9]{3}(-[0-9]{2}){2}$}';
            
            $resault = preg_match($regexTel2, $textTel2);
            /* var_dump($resault); */
            
            $textSub = 'sdakdhkasjh a=12 djasldjlasjd
                asjdlajsdl b=0 djalsjdlas
                jdlasjdla asdasd=567 dkjas;kd;aslk
            ajsdlajsdk qw=1 jdahskdhask';
            
            $regSub = '{([a-z]+)=([0-9]+)}i';
            
            preg_match_all($regSub, $textSub, $matches);
            $collection = $matches[0];
            $keys = $matches[1];
            $values = $matches[2];
            $countKeys = count($keys);
            for ($i=0; $i < $countKeys; $i++) { 
                echo ('Была найдена переменная ' . $keys[$i] . ' со значением ' . $values[$i] . ';');?><br><?php
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
                    
                    print('<br>Size = '.$this->size . '<br>');
                    print('Legs = '.self::$legs . '<br>');
                    print(static::legsName() . '<br>');
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
            require ('./Views/footer.php');
        ?>
    </body>
</html>