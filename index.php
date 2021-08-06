<?php
include_once __DIR__ . '/vendor/autoload.php';

use OlaCrawler\Classes\News;

$newsDom = new News('https://finansavisen.no/nyheter/personlig-okonomi');
$headlines=$newsDom->get_headlines();
/*
$headline_links=$newsDom->get_headline_links();
*/
include("Templates/newsList.php");
