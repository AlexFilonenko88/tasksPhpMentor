<?php
// Задача 89
$name = isset($_GET['name']) ? $_GET['name'] : print('Заполните ваше имя');
echo '<br>';
$surname = isset($_GET['surname']) ? $_GET['surname'] : print('Заполните вашу фамилию');
$age = isset($_GET['age'])?$_GET['age']:'';

switch ($age) {
    case '18':
        $age = 'до 18 лет';
        break;
    case '19':
        $age = '19-30 лет';
        break;
    case '30':
        $age = '30-50 лет';
        break;
    case '50':
        $age = '50 лет и старше';
        break;
    default:
        echo '';
}

$preferences = [1 => 'Овощи', 2 => 'Фрукты'];
$preferences = isset($_GET['radio'])?$preferences[1]:$preferences[2];

echo '<br>';
echo '<br>';
echo '<br>';
echo 'Ваш возрастной диапазон: ' . htmlspecialchars($age);
echo '<br>';
echo "Ваше имя и фамилия: " . htmlspecialchars($name) . ' ' . htmlspecialchars($surname);
echo '<br>';
echo 'Вы предпочитаете: ' . htmlspecialchars($preferences);
?>
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
<form method="get">
    <p>Введите имя <input type="text" name="name"></p>
    <p>Введите фамилию <input type="text" name="surname"></p>
    <p>Укажите возраст <select name="age">
            <option value="18">до 18 лет</option>
            <option value="19">19-30 лет</option>
            <option value="30">30-50 лет</option>
            <option value="50">50 лет и старше</option>
        </select>
    </p>
    <input type="radio" name="radio" value="1">Овощи
    <input type="radio" name="radio" value="2">Фрукты

    <p><input type="submit" value="Отпарвить"></p>
</form>
</body>
</html>


