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
$filename = __DIR__ . '\text.txt';

if(file_exists($filename)){
    if(isset($_POST['text1'])){
        file_put_contents($filename, $_POST['text1']);
        $file = file_get_contents($filename);
    }
}
?>
<body>
<form method="POST">
    <p><textarea name="text1" rows="10" cols="45"><?= htmlspecialchars(isset($file)?$file:'') ?> </textarea></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
