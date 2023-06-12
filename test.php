<?php
    $rawJson = file_get_contents('php://input');
    
    echo md5($rawJson);
?>