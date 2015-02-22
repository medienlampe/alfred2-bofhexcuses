<?php
$lines = file('excuses.txt', FILE_IGNORE_NEW_LINES);
$line = $lines[rand(0, sizeof($lines)-1)];
$result = '<?xml version="1.0"?><items><item arg="'.$line.'" valid="yes" autocomplete="" filetype=""><title>'.$line.'</title><icon type=""></icon></item></items>';
echo $result;