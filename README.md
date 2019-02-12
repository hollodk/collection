# collection

This is a collection of the tools i use in most of my work

## MaxMind

Download file https://geolite.maxmind.com/download/geoip/database/GeoLite2-City.tar.gz, extract it and you got the mmdb file.

```php
<?php

require_once 'vendor/autoload.php';

use GeoIp2\Database\Reader;

$reader = new Reader(__DIR__.'/GeoLite2-City/GeoLite2-City.mmdb');
$record = $reader->city('84.227.20.193');

var_dump($record->country->isoCode);
```

## ld-json

Pretty cool package to support rich snippets with google

```php
<?php

$title = 'This is my awesome blog';
$description = 'This post is about loan and good stuff';
$url = 'http://this.blog/1';
$author = 'this.blog';
$publisher = $author;
$datePublished = '2019-01-01';
$image = 'http://this.image.url';

$json = \JsonLd\Context::create('article', [
    'headline' => $title,
    'description' => $description,
    'mainEntityOfPage' => $url,
    'author' => $author,
    'publisher' => [
        'name' => $publisher,
    ],
    'datePublished' => $datePublished,
    'image' => $image,
]);

echo $json;
```

## open graph

Remember to add open graph support as well

```php
<?php

require_once(__DIR__.'/../vendor/autoload.php');

use ChrisKonnertz\OpenGraph\OpenGraph;

$title = 'This is my blog';
$image = 'http://www.image.url';
$description = 'This is going to happen in 2019';
$url = 'http://this.blog.url';

$og = new OpenGraph();
$og->type('article')
    ->title($title)
    ->image($image)
    ->description($description)
    ->url($url)
    ;

var_dump($og->renderTags());
```

## Social Share Url

Add easy integration with share on social medias

```php
<?php

require_once(__DIR__.'/vendor/autoload.php');

use \drmonkeyninja\SocialShareUrl\SocialShareUrl;

$SocialShareUrl = new SocialShareUrl();
$url = $SocialShareUrl->getUrl('facebook', 'http://example.com');

var_dump($url);
```
