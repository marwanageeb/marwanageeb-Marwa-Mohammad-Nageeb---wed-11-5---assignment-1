<?php
/*
2- We have HTML content stored inside a variable. For example:
$htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";
Find a way to remove all HTML tags from the content (keeping only the text inside it)

    */

    $htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";
    $contentWithoutTag= strip_tags( $htmlContent);
    echo  $contentWithoutTag ;
