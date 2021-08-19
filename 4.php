<?php
/*
4- Displaying large numbers in the website may be hard to read. 
It’s too hard to read a number like this:
$num = 15023198.91;
Find a way to display the numbers in this grouped format: 15,023,198.91

    */

    $num = 15023198.91;

    echo number_format($num,2);
