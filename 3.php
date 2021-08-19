<?php
/*
3- Some of our website users submit their form inputs with extra spaces (before or after the actual data). For example:
$username = "  Kareem Fouad ";
Find a way to remove these extra spaces.
    */

    $username = "  Kareem Fouad ";
    $newUserName = trim($username);
