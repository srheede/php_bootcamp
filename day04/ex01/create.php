<?php
if ($_POST['passwd'])
{
    $pw = hash(joaat, $_POST[passwd]);
    if (!file_exists("../private"))
        mkdir("../private", 0777, true);
    if (!file_exists("../private/passwd"))
    {
        $arr = array(array('login' => $_POST['login'], 'pw' => $pw));
        $serial = serialize($arr);
        file_put_contents("../private/passwd", $serial);
        echo "OK\n";
    }
    else
    {
        $err = FALSE;
        $serial = file_get_contents("../private/passwd");
        $arr = unserialize($serial);
        foreach ($arr as $login)
        {
            if ($login['login'] == $_POST['login'])
                $err = TRUE;
        }
        if ($err)
            echo "ERROR\n";
        else
        {
            array_push($arr, array('login' => $_POST['login'], 'pw' => $pw));
            $serial = serialize($arr);
            file_put_contents("../private/passwd", $serial);
            echo "OK\n";
        }
    }
}
else
    echo "ERROR\n"
?>