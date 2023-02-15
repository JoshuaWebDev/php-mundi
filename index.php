<?php

require __DIR__ . '/vendor/autoload.php';

use JoshuaWebDev\Mundi\Mundi;

$mundi = new Mundi;
$countries = json_decode($mundi::getAll());

include('public/index.php');