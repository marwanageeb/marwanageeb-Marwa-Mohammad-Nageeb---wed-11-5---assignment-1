<?php
/*
5- Given an associative array, For example:
$employeePositions = [
    'kareem fouad' => 'backend',
    'ahmed bahnasy' => 'frontend',
    'mohammed nabeel' => 'android',
];
Convert it into two numeric arrays: one for keys only and the other for values only.

    */
$employeePositions = [
    'kareem fouad' => 'backend',
    'ahmed bahnasy' => 'frontend',
    'mohammed nabeel' => 'android',
];
// numeric array for key
$arrayForKey = array_keys($employeePositions);

// numeric array for values
$arrayForValue = array_values($employeePositions);

// print two numeric array
echo "<pre>";
print_r($arrayForKey);
echo "<hr>";
print_r($arrayForValue);
echo "</pre>";
