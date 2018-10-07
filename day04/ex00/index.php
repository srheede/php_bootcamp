<?php
    session_start();
    if ($_GET['submit'] == 'OK')
    {
        $_SESSION[login] = $_GET[login];
        $_SESSION[passwd] = $_GET[passwd];
    }
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<form>
        <table>
            <tr>
                <td>Username:</td><td><input name="login" value="<?php echo $_SESSION[login] ?>"></td>
</tr>
<tr>
                <td>Password:</td><td><input name="passwd" value="<?php echo $_SESSION[passwd] ?>"></td>
</tr>
<tr>
                <td colspan="2"><input type="submit" name="submit" value="OK"></td>
</tr>
    </form>
</body>
</html>
