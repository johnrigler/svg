<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$array = Yaml::parse(file_get_contents("points.yml"));

#print Yaml::dump($array);

print_r($array);

