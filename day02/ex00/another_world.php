#!/usr/bin/php
<?PHP
$arr = explode(" ", $argv[1]);
$arr = array_filter($arr);
$merge = array();
foreach($arr as $elem)
{
    $exploded = explode("\t", $elem);
    $exploded = array_filter($exploded);
    $merge = array_merge($merge, $exploded);
}
echo implode(" ", $merge);
echo "\n";
?>