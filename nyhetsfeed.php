<?php

include_once __DIR__ . '/vendor/autoload.php';

use OlaCrawler\Classes\News;

$newsDom = new News('https://www.aftenposten.no/');
$headlines=$newsDom->get_headlines();

include("templates/newsfeed.php");
