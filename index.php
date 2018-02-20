<?php
require_once('./vendor/autoload.php');
// Namespace
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;
$channel_token ='qFZ908h/98NwePyPmA1J0FFmgWvYZjXYmCozPAmqENRhKjBG4HLxwIZhztKCyLWOcA1bzhaKTdpRtYvDCidqWSqJaNl/9N8POwRxKjGMmWLT5Zmk1mYIOtUU+C2Rdna0CE4r1zI4SyZPNuED8nx7mwdB04t89/1O/w1cDnyilFU=';
$channel_secret = 'c14961f4925ae68f04875b8460fb0f5f';
// Get message from Line API
$content = file_get_contents('php://input');
$events = json_decode($content, true);
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Line API send a lot of event type, we interested in message only.
		if ($event['type'] == 'message') {
			switch($event['message']['type']) {
			case 'text':
				// Get replyToken
				$replyToken = $event['replyToken'];
				// Reply message

				$msg = 'Hello, your message is '. $event['message']['text'];
				
				replymsg($channel_token,$replyToken,$msg)

				break;
			}
		}
	}
}

echo "Done.";

function replymsg($channel_token,$replyToken,$msg){
	$httpClient = new CurlHTTPClient($channel_token);
	$bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
	$textMessageBuilder = new TextMessageBuilder($msg);
	$response = $bot->replyMessage($replyToken, $textMessageBuilder);

}