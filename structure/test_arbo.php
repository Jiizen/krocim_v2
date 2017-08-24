<?php

$url =  $_SERVER['REQUEST_URI'];

// Si on est au niveau du dossier des photos, changement de l'arborescence
$level = '';
if(strpos($url, 'photo') != false) {
    $level = '../';
}
?>