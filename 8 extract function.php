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
// The extract() function does array to variable conversion.
// That is it converts array keys into variable names and array values into variable value
    $userData = [
        'name' => 'kareem',
        'job' => 'backend',
        'language' => 'php',
        'framework' => 'laravel',
    ];	
	extract($userData);
	
	// after using extract() function
	echo"\$name is $name\n\$job is $job\n\$language is $language\n\$framework is $framework";