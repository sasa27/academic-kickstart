<?php

require 'guzzle.phar';

// Create a client for http://localhost (binding to a host is optional)
$client = new Guzzle\Http\Client('http://localhost:8080/WSrest/webresources');

$response = $client->get('generic/text/te')->send();

echo $response->getBody();

$response = $client->put('generic/textput/te')->send();

echo $response->getBody();
?>



