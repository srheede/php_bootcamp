#!/usr/bin/php
<?PHP
function error()
{
    echo "Wrong Format\n";
    exit (0);
}
function check($str, $str2)
{
    if (strcasecmp($str, $str2))
        return (0);
    return (1);
}
if ($argc != 2)
    exit (0);
$arr = explode(" ", $argv[1]);
$arr = array_filter($arr);
if (count($arr) != 5)
    error();
$err = check("lundi", $arr[0]);
$err += check("mardi", $arr[0]);
$err += check("mercredi", $arr[0]);
$err += check("jeudi", $arr[0]);
$err += check("vendredi", $arr[0]);
$err += check("samedi", $arr[0]);
$err += check("dimanche", $arr[0]);
if (!$err)
    error();
$before = $arr[2];
$arr[2] = preg_replace("/[Jj]anvier/", "01", $arr[2]);
$arr[2] = preg_replace("/[Ff]evrier/", "02", $arr[2]);
$arr[2] = preg_replace("/[Mm]ars/", "02", $arr[2]);
$arr[2] = preg_replace("/[Aa]vril/", "03", $arr[2]);
$arr[2] = preg_replace("/[Mm]ai/", "05", $arr[2]);
$arr[2] = preg_replace("/[Jj]uin/", "06", $arr[2]);
$arr[2] = preg_replace("/[Jj]uillet/", "07", $arr[2]);
$arr[2] = preg_replace("/[Aa]out/", "08", $arr[2]);
$arr[2] = preg_replace("/[Ss]eptembre/", "09", $arr[2]);
$arr[2] = preg_replace("/[Oo]ctobre/", "10", $arr[2]);
$arr[2] = preg_replace("/[Nn]ovembre/", "11", $arr[2]);
$arr[2] = preg_replace("/[Dd]ecembre/", "12", $arr[2]);
if ($before === $arr[2])
    error();
if (preg_match("/[0-9][0-9]:[0-9][0-9]:[0-9][0-9]/", $arr[4]) != 1)
    error();
$time = strtotime($arr[1].".".$arr[2].".".$arr[3]." ".$arr[4]." -1 hour");
if (!$time)
    error();
print_r($arr);
echo $time;
echo "\n";
?>