<?php namespace Rtablada\SlimPost;

/**
* Slim Post Provider
*/
class SlimPost
{
	protected $attributes = array();

	public function __construct($url, $data)
	{
		$this->attributes['url'] = $url;
		$this->attributes['data'] = $data;
	}

	public static function build($url, $data)
	{
		return new static($url, $data);
	}

	public function send()
	{
		$payload = http_build_query($attributes['data']);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $attributes['url']);
		curl_setopt($ch, CURLOPT_POST, count($attributes['data']));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$result = curl_exec($ch);

		curl_close($ch);

		return $result;
	}
}