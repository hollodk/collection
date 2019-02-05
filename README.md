# collection

This is a collection of the tools i use in most of my work

## MaxMind

Download file https://geolite.maxmind.com/download/geoip/database/GeoLite2-City.tar.gz, extract it and you got the mmdb file.

```
<?php
  
use GeoIp2\Database\Reader;

require_once 'vendor/autoload.php';

$reader = new Reader(__DIR__.'/GeoLite2-City/GeoLite2-City.mmdb');
$record = $reader->city('84.227.20.193');

var_dump($record->country->isoCode);
```
