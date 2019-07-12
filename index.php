<?php
require_once('./vendor/autoload.php');
// Namespace
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;
$channel_token ='qdfDhN/jk/JSII9PqmifBCgoJSfx7x6SI4Zu6Jv6BeNJq1uYdTkcdn5ZtzfE0lMesaEk98zP6nT2nubKWdvs7BOKmN1a+kGjnlde8Wnl5MLlp6X2hFfWHtkLGba/UhWP0gdoOENp245dAV2w5jX8SAdB04t89/1O/w1cDnyilFU=';
$channel_secret = '80074d0a07f171aab6a73fd7f21997ae';
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
				
				$msg  = $event['message']['text'];


				$respMessage = 'Hello, your message is ';

				$httpClient = new CurlHTTPClient($channel_token);
				$bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
				$textMessageBuilder = new TextMessageBuilder($respMessage);
				$response = $bot->replyMessage($replyToken, $textMessageBuilder);
				break;
			}
		}
	}
}

echo "Done.";

function reply($channel_token,$msg){


}