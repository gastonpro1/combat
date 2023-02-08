<?php

try {
    $db = new PDO(
        'mysql:host=localhost;dbname=combat;charset=utf8',
        'root',
        ''
    );
} catch(Exception $e){
    echo "erreur db";
    die('Erreur : '.$e->getMessage());
}



?>