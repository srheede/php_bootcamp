#!/usr/bin/php
<?PHP
$arr = explode(" ", $argv[1]);
$arr = array_filter($arr);
$first = array_slice($arr, 0, 1);
$rest = array_slice($arr, 1);
$arr = array_merge($rest, $first);
echo implode(" ", $arr);
echo "\n";
?>