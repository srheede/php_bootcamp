#!/usr/bin/php
<?PHP
echo "Enter a number: ";
while ($buffer = fgets(STDIN))
{
    $buffer = trim($buffer);
    if (!is_numeric($buffer))
        echo "'$buffer' is not a number\n";
    else if ($buffer % 2 == 0)
        echo "The number $buffer is even\n";
    else
        echo "The number $buffer is odd\n";
    echo "Enter a number: ";
}
echo "\n";
?>