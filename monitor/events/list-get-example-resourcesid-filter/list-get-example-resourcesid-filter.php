<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "{{ account_sid }}";
$token = "{{ auth_token }}";
$client = new Monitor_Services_Twilio($sid, $token);

$params = array(
    'ResourceSid' => 'PN4aa51b930717ea83c91971b86d99018f'
);
$events = $client->events->getIterator(0, 50, $params);
foreach ($events as $e) {
    echo $e->description;
}
