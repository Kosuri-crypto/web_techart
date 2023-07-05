<?php
namespace Controllers;

class Controller
{
    public function render($styleView, $titleView, $contentView)
    {
        require ('./Views/templateView.php');
    }
}
