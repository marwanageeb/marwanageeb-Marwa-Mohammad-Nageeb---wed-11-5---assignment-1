<?php
/*
1- We have a message encoded in ASCII hexadecimal format. For example:
    $hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';
    Decode it back to read the message.
    */
    

$hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';
echo hex2bin($hexMessage);
