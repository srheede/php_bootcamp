#!/usr/bin/php
<?PHP
    $sliced = array_slice($argv, 1);
    $arr = array();
    foreach($sliced as $elem)
    {
        $exploded = explode(" ", $elem);
        $arr = array_merge($arr, $exploded);
    }
    $arr = array_filter($arr);
    sort($arr);
    foreach($arr as $elem)
    {
        echo "$elem\n";
    }
?>