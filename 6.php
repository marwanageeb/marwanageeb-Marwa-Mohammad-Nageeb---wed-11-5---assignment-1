<?php
/*
6- Given a numeric array of three elements, For example:
$nums = [4, 7, 1];
Destructure the array into three variables $x, $y and $z (in only one statement).
    */

// Using the shorthand syntax: 
$nums = [4, 7, 1];
[$x, $y, $z] = $nums;
echo $x ;

// Using the list syntax:
$array = [6, 2, 9];
list($a, $b, $c) = $array;
var_dump($a);