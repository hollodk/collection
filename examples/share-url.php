<?php

require_once(__DIR__.'/../vendor/autoload.php');

use \drmonkeyninja\SocialShareUrl\SocialShareUrl;

$SocialShareUrl = new SocialShareUrl();
$url = $SocialShareUrl->getUrl('facebook', 'http://example.com');

var_dump($url);
