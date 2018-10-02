#!/usr/bin/php
<?PHP
$arr = explode(" ", $argv[1]);
$arr = array_filter($arr);
echo implode(" ", $arr);
    echo "\n";
?>