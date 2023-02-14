<?php

require __DIR__ . '/vendor/autoload.php';

use JoshuaWebDev\Mundi\Mundi;

$mundi = new Mundi;
$countries = json_decode($mundi::getAll());

foreach($countries as $country) {
    echo "ID: " . $country->id . "\nNAME: " . $country->name . "\n";    
}
