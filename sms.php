<?php
// Include the Twilio PHP library
require_once 'twilio-php-main/src/Twilio/autoload.php';

use Twilio\Rest\Client;

// Twilio credentials (replace with your real values)
$accountSid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
$authToken = 'your_auth_token';
$twilioNumber = 'mynumber'; // Your Twilio number
$recipientNumber = '+12222222222'; // Your test recipient

// Message to send
$messageBody = "This is a test SMS sent using Twilio API.";

try {
    // Initialize Twilio client
    $client = new Client($accountSid, $authToken);

    // Send SMS
    $message = $client->messages->create(
        $recipientNumber,
        [
            'from' => $twilioNumber,
            'body' => $messageBody
        ]
    );

    echo "Message sent successfully. SID: " . $message->sid;

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>