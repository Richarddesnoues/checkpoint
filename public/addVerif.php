<?php

require_once 'connec.php';
require_once '../src/models/bribesModel.php ';
require_once 'book.php';

$errors = [];
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $bribe = [];
    foreach($_POST as $key => $value) {
        $bribe[$key] = htmlentities(trim((string) $value));
        if(empty($bribe[$key])){
            $errors[$key] = "Veuillez remplir le champ $key";
        }
        if(empty($bribe[$value]) < 0 ){
            $errors[$key] = "Pas assez d'oseilles !";
        }
    }

    if (empty($errors)) {
        insert($bribe);
        header('Location: /');
    }
}

