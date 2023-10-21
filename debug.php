<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Калькулятор</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="number1" placeholder="Первое число">
    <select name="operation">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="text" name="number2" placeholder="Второе число">
    <input type="submit" name="submit" value="Ответ">
</form>

<?php
if (isset($_GET['submit'])) {
    if (!isset($_GET['number1']) || !isset($_GET['number2']) || !isset($_GET['operation'])) {
        $error_result = 'Не все поля заполнены';
    } else {
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $operation = $_GET['operation'];
    };

    if (!is_numeric($number1) || !is_numeric($number2)) {
        $error_result = 'Операнды должны быть числами';
    } else {
        switch ($operation) {
            case 'plus':
                $result = $number1 + $number2;
                break;
            case 'minus':
                $result = $number1 - $number2;
                break;
            case 'multiply';
                $result = $number1 * $number2;
                break;
            case 'divide':
                if ($number2 == 0) {
                    $error_result = 'На ноль делить нельзя';
                } else {
                    $result = $number1 / $number2;
                    break;
                }
        }
    }

    if (isset($error_result)) {
        echo "Ошибка: $error_result";
    } else {
        echo "Ответ: $result";
    };
}

?>
if (isset($_GET['number1']) || isset($_GET['number2']) || isset($_GET['operation'])) {
echo $formula = 'Ответ' . ' ';
echo $number1 . ' ';
echo $operation . ' ';
echo $number2 . ' ';
echo '= ' . $result ;
};

<!--   <title>--><?php //= htmlspecialchars($number1) . htmlspecialchars($operation) . htmlspecialchars($number2) . '=' . htmlspecialchars($result) ?><!--</title>-->

</body>
</html>