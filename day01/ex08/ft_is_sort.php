<?PHP
function ft_is_sort($arr)
{
    $sorted = $arr;
    sort($sorted);
    if ($sorted == $arr)
        return 1;
    return 0;
}