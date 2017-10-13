<?php

require __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
// create our http client (Guzzle)
$client = new Client(array(
    'base_uri' => 'http://127.0.0.1:8000',
    'http_errors' => false,
));

$nickname = 'ObjectOrienter'.rand(0, 999);
$data = array(
    'nickname' => $nickname,
    'avatarNumber' => 5,
    'tagLine' => 'a test dev!'
);

$response = $client->post('/api/programmers');

echo $response->getBody();

