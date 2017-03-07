<?php defined('SYSPATH') OR die('No direct access allowed.');

abstract class Kohana_OAuth2_Provider_Facebook extends OAuth2_Provider {

	public $name = 'facebook';

	public function url_authorize()
	{
		return 'https://www.facebook.com/v2.8/dialog/oauth';
	}

	public function url_access_token()
	{
		return 'https://graph.facebook.com/v2.8/oauth/access_token';
	}


}
