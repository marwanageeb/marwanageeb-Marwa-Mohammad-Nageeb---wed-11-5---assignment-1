<?php
/*
7- Given an associative array, For example:
$userData = [
    'name' => 'kareem',
    'job' => 'backend',
    'language' => 'php',
    'framework' => 'laravel',
];
Destructure the array into variables $name, $job … etc (in only one statement, variable names should be the same as key names).

    */

$userData = [
    'name' => 'kareem',
    'job' => 'backend',
    'language' => 'php',
    'framework' => 'laravel',
];

['name' => $name, 'job' => $job, 'language' => $language, 'framework' => $framework] = $userData;

echo $name . "<br>";
var_dump($job, $language, $framework);
