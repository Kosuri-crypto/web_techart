<?php
    require('../vendor/autoload.php');

    use ScssPhp\ScssPhp\Compiler;
    
    $CONTENT_PATH_IN = './scss/';
    $CONTENT_PATH_OUT = './css/';

    /*
    if (!file_exists($CONTENT_PATH_OUT.$scss_filename.'.css')) {
        $compiler = new Compiler();
        
        $result_content = $compiler->compileString('@import "'.$CONTENT_PATH_IN.$scss_filename.'.scss";');
        file_put_contents($CONTENT_PATH_OUT.$scss_filename.'.css', $result_content->getCss());
    }
    */

    
    $compiler = new Compiler();  
    $result_content = $compiler->compileString('@import "'.$CONTENT_PATH_IN.$scss_filename.'.scss";');
    return $result_content->getCss()
    
?>
