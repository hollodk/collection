<?php

require_once(__DIR__.'/../vendor/autoload.php');

use ChrisKonnertz\OpenGraph\OpenGraph;

$og = new OpenGraph();

$og->title('Apple Cookie')
    ->type('article')
    ->image('http://example.org/apple.jpg')
    ->description('Welcome to the best apple cookie recipe never created.')
    ->url('http://www.google.com')
    ;

var_dump($og->renderTags());
