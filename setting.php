<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "y591vBCT7XFk8iHRIlW0IbE2XAHsJsUUAIXFGqNzm6/azq0PG96YpwQDhOj6zjUhVPO3cXsMy93Ne56bKxLnMf/5scnAPctDpKdH1S8vnCP0BmxZS5Eq7MItRyZ32vCre1EbVhPiv2rtZBApm+dH0wdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "e419d35c44c925fe99ab5ae740d4ad0b";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}


