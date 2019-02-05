<?php

use GeoIp2\Database\Reader;

require_once 'vendor/autoload.php';

$reader = new Reader(__DIR__.'/GeoLite2-City/GeoLite2-City.mmdb');
$record = $reader->city('84.227.20.193');

var_dump($record->country->isoCode);
