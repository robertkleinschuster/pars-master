<?php

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$server = League\Glide\ServerFactory::create([
    'source' => $_SERVER['DOCUMENT_ROOT'] . '/upload',
    'cache' => $_SERVER['DOCUMENT_ROOT'] . '/cache',
    'max_image_size' => 2000*2000,

]);
if (!isset($_GET['file'])) {
    echo 'file parameter missing';
}
$path = str_replace('/upload', '', $_GET['file']);
try {
    \League\Glide\Signatures\SignatureFactory::create('pars-sign')->validateRequest('/img.php', $_GET);
    $server->outputImage($path, $_GET);
} catch (\League\Glide\Signatures\SignatureException $e) {
    echo $e->getMessage();
}
exit;
