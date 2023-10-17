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
    <form action="handler_calculator.php" method="post">
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
</body>
</html>