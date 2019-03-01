<?php



require "vendor/autoload.php";

$access_token = 'PaD6A6Uv7hKNdPpqKbDEQvWKfYIrgqXbyh3gqYZ0ffcQWk2cv7goPbUz17iPENw3UuyHIStOB/Kmo/Ib3mtLx1EwFyW3a+e4IKUShCZMwBVCiFT0iXRM1c5SbfBZLvKSIfhaG+Sp9JzxNrlHnrSKfAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1051d1c71e3d084fba9f553d10c9df58';

$pushID = 'kaweerlex';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







