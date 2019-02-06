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

## ld-json

Pretty cool package to support rich snippets with google

```
$context = \JsonLd\Context::create('local_business', [
    'name' => 'Consectetur Adipiscing',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
    'telephone' => '555-555-5555',
    'openingHours' => 'mon,tue,fri',
    'address' => [
        'streetAddress' => '112 Apple St.',
        'addressLocality' => 'Hamden',
        'addressRegion' => 'CT',
        'postalCode' => '06514',
    ],
    'geo' => [
        'latitude' => '41.3958333',
        'longitude' => '-72.8972222',
    ],
]);

echo $context; // Will output the script tag
```

## open graph

Remember to add open graph support as well

```
<?php

require_once(__DIR__.'/vendor/autoload.php');

$writer = new Opengraph\Writer();
$writer->append(Opengraph\Writer::OG_TITLE, 'The Rock');
$writer->append(Opengraph\Writer::OG_TYPE, Opengraph\Writer::TYPE_VIDEO_MOVIE);
$writer->append(Opengraph\Writer::OG_URL, 'http://www.imdb.com/title/tt0117500/');
$writer->append(Opengraph\Writer::OG_IMAGE, 'http://ia.media-imdb.com/images/rock.jpg');

echo $writer->render() . PHP_EOL;
```
