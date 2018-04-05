<?php defined('SYSPATH') OR die('No direct access allowed.');

abstract class Kohana_OAuth2_Provider_Facebook extends OAuth2_Provider {

	public $name = 'facebook';

	/** @var  string */
	private $version;

    public function __construct(array $options = [])
    {
        $this->version = $options['version'] ?? '2.12';
    }

    public function url_authorize()
	{
		return 'https://www.facebook.com/v' . $this->version . '/dialog/oauth';
	}

	public function url_access_token()
	{
		return 'https://graph.facebook.com/v' . $this->version . '/oauth/access_token';
	}


}
