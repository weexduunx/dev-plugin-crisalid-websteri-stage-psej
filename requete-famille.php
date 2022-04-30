
<?php

require_once 'authentification.php';

$_SESSION= $token;

require __DIR__ . '/vendor/autoload.php';


$client = new GuzzleHttp\Client([
    'base_uri' => 'http://testapi.crisalid.com/api/mailsteris/',
]);

$reponse = $client->request('GET', 'familles?token='.$_SESSION);

$corps = $reponse->getBody();

$xml = new SimpleXMLElement($corps);

?>


