<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '\twilio-php-main\twilio-php-main\src\Twilio\autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC632ca7556128a88237c53d442aba9141';
$token = '188976b3e040ca94a3c50793b01c605f';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+639484996063',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+18433965752',
        // the body of the text message you'd like to send
        'body' => "Your Request Has been approved"
    ]
);

?>