<?php
$result = 0;

if (isset($_GET['submit'])) {

    if (!isset($_GET['number1']) || !isset($_GET['number2']) || !isset($_GET['operation'])) {
        $error_result = 'Не все поля заполнены';
    } else {
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $operation = $_GET['operation'];
    }

    if (!is_numeric($number1) || !is_numeric($number2)) {
        $error_result = 'Операнды должны быть числами';
    } else {
        switch ($operation) {
            case 'plus':
                $operation = '+';
                $result = $number1 + $number2;
                break;
            case 'minus':
                $operation = '-';
                $result = $number1 - $number2;
                break;
            case 'multiply';
                $operation = '*';
                $result = $number1 * $number2;
                break;
            case 'divide':
                $operation = '/';
                if ($number2 == 0) {
                    $error_result = 'На ноль делить нельзя';
                } else {
                    $result = $number1 / $number2;
                }
                break;
            default:
                $error_result = 'Введите правильную операцию';
        }
    }

    setcookie('number1', $number1);
    setcookie('number2', $number2);
    setcookie('operation', $operation);
    setcookie('result', $result);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title><?=
        htmlspecialchars($resultStr ?? 'Калькулятор') ?>
    </title>
</head>
<body>

<?php
$arrRes = [];

$resultStr = "";
setcookie('resultStr', $resultStr);
if(isset($number1) && isset($number2) && isset($operation)) {
    $resultStr = "Ответ: $number1 $operation $number2 = $result";
}

if (isset($error_result)) {
    echo "Ошибка: $error_result";
} else {
    echo htmlspecialchars($resultStr);
}

echo '<br>';

$previous_res = '';

if(isset($_COOKIE)) {
    echo $previous_res = htmlspecialchars("Прерыдущий ответ: " . $_COOKIE['number1'] . ' ' . $_COOKIE['operation'] . ' ' . $_COOKIE['number2'] . ' ' . "=" . ' ' . $_COOKIE['result']);
}

$arrRes[]=$previous_res;
$json_encode_res = json_encode($arrRes);
//var_dump($json_encode_res);
//echo '<br>';

setcookie('json_encode_res', $json_encode_res);

echo '<br>';
$rrr = json_decode($_COOKIE['json_encode_res']);
//print_r($rrr);
//foreach ($rrr as $value){
//    echo $value;
//}

?>

<form action="" method="get">
    <input type="text" name="number1" placeholder="Первое число"  value="<?= $result ?>">
    <select name="operation">
        <?php
        $operation = $_GET['operation'];
        ?>
        <option <?php if($operation == 'plus') { ?> selected="true" <?php }?> value="plus">+</option>
        <option <?php if($operation == 'minus') { ?> selected="true" <?php }?> value="minus">-</option>
        <option <?php if($operation == 'multiply') { ?> selected="true" <?php }?> value="multiply">*</option>
        <option <?php if($operation == 'divide') { ?> selected="true" <?php }?> value="divide">/</option>
    </select>
    <input type="text" name="number2" placeholder="Второе число">
    <input type="submit" name="submit" value="Ответ">
</form>

</body>
</html>
