<?php
require 'vendor/autoload.php';

use App\View\Page;
use App\MySql;

$bd = new MySql('localhost', 'root', 'root', 'gallery');
if (isset($_GET['id'])) {
    $image = new Page('image');
    echo $image->render([
        'image' => $bd->getItem("select * from `gallery` where id = {$_GET['id']}")
    ]);
} else {
    $gallery = new Page('gallery');
    echo $gallery->render([
        'gallery' => $bd->getItemArray('select * from `gallery`'),
    ]);
}
