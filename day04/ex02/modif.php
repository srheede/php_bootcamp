<?php
if ($_POST['newpw'] && $_POST['oldpw'])
{
    $oldpw = hash(joaat, $_POST['oldpw']);
    $newpw = hash(joaat, $_POST['newpw']);
    if (!file_exists("../private/passwd"))
        echo "ERROR\n";
    else
    {
        $err = TRUE;
        $serial = file_get_contents("../private/passwd");
        $arr = unserialize($serial);
        $i = 0;
        foreach ($arr as $login)
        {
            if ($login['login'] == $_POST['login'] && $login['pw'] == $oldpw)
            {
                $arr[$i]['pw'] = $newpw;
                $err = FALSE;
            }
            $i++;
        }
        if ($err)
            echo "ERROR\n";
        else
        {
            $serial = serialize($arr);
            file_put_contents("../private/passwd", $serial);
            echo "OK\n";
        }
    }
}
else
    echo "ERROR\n"
?>