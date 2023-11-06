<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
$text = '';
if (isset($_POST['text'])) {
    $text = $_POST['text'];
}

$filename = __DIR__ . '\text.txt';

//1
//$fo = fopen($filename, 'c');
//fseek($fo, 0, SEEK_END);
//fwrite($fo, PHP_EOL . $text);
//fclose($fo);

if (file_exists($filename)) {
    $text1 = file_get_contents($filename);
    file_put_contents($filename, $text . PHP_EOL . $text1);

    echo htmlspecialchars($text1);
} else {
    echo 'Необходимо создать файл';
}

?>
<body>
<form method="POST">
    <p><input type="text" name="text" value="<?= htmlspecialchars($text1) ?>"></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>