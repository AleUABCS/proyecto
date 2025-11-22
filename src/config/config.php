<?php

require __DIR__ . '/../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
$dotenv->load();

return [
    'base_url' => 'http://localhost/proyecto-pweb/proyecto',
    'assets_url' => 'http://localhost/proyecto-pweb/proyecto/public/assets',
    'src_url' => 'http://localhost/proyecto-pweb/proyecto/src',
    'db' => [
        'host' => $_ENV['DB_HOST'],
        'name' => $_ENV['DB_DATABASE'],
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'port' => $_ENV['DB_PORT'],
        'charset' => $_ENV['CHARSET']
    ]
]

?>