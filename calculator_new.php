<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$num = $_GET['num'];
$op = $_GET['op'];

setcookie('num', $num);
setcookie('op', $op);

?>
<table>
    <tr>
        <td>
            <form method="GET">
                <table>
                    <tr>
                        <td colspan="4">
                            <input type="text" placeholder="введите число" readonly="true" value="<?= $num . $op?>">
                        </td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="num" value="1"></td>
                        <td><input type="submit" name="num" value="2"></td>
                        <td><input type="submit" name="num" value="3"></td>
                        <td><input type="submit" name="op" value="/"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="num" value="4"></td>
                        <td><input type="submit" name="num" value="5"></td>
                        <td><input type="submit" name="num" value="6"></td>
                        <td><input type="submit" name="op" value="*"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="num" value="7"></td>
                        <td><input type="submit" name="num" value="8"></td>
                        <td><input type="submit" name="num" value="9"></td>
                        <td><input type="submit" name="op" value="-"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="num" value="0"></td>
                        <td colspan="2"><input type="submit" name="op" value="=" style="width: 80%;"></td>
                        <td><input type="submit" name="op" value="+"></td>
                    </tr>
                </table>
            </form>
        </td>
        <td valign="top">
            <form><input type="submit" value="C"></form>
        </td>
    </tr>
</table>
</body>
</html>
