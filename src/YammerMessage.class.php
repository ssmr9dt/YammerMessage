<?php

namespace ssmr9dt;

use HTTP_Request2;

// define("YAMMER_TOKEN", "token");

class YammerMessage
{
	private $url = "https://www.yammer.com/api/v1/messages.json";
	private $request;

	public function __construct()
	{
		// for GuzzleHttp
		// $this->request = new Client([
		// 	"base_uri" => $this->url
		// ]);
		// end GuzzleHttp
		$this->request = new HTTP_Request2($this->url, HTTP_Request2::METHOD_POST);
		$this->request->setConfig([
		    "ssl_verify_host" => false,
		    "ssl_verify_peer" => false
		]);
		$this->request->setHeader([
		    "Authorization: Bearer " . YAMMER_TOKEN,
		    "Content-Type: application/json"]);
	}
	public function sendMessage($body, $group_id, $arr = [])
	{
		$arr["body"] = $body;
		$arr["group_id"] = $group_id;
		// $arr["cc"] = ["mailaddress","yammer ID"];
		// $arr["direct_to_user_ids"] = [1111111111111];
		
		// for GuzzleHttp
		// $this->request->post("", [
		// 	"headers" => ["Authorization: Bearer " . YAMMER_TOKEN ],
		// 	"json" => $arr
		// ]);
		// end GuzzleHttp
		$this->request->setBody(json_encode($arr));
		$ret = $this->request->send();
		if ($ret->getStatus() <= 299) { return true; }
		return false;
	}
}
