<?php
//2. ЗАДАЧИ НА ОДНОМЕРНЫЙ МАССИВ
//1.  Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.

// наполняю случайными числами массив
$numbers = [];

for ($i = 0; $i <= 200; $i++) {
    $numbers[$i] = mt_rand(-100, 100);
}

// минимально положительно число
$min = +INF;
foreach ($numbers as $number) {
    if ($number < $min && $number > 0) {
        $min = $number;
    }
}

//echo " Минимально положительно число $min";

// максимально отрицательное число
$max = -INF;
foreach ($numbers as $number) {
    if ($number > $max && $number < 0) {
        $max = $number;
    }
}

//echo "Максимальное отрицательное число $max";


// 2.  Дано N целых случайных чисел в диапазоне от 1 до 100.  Найти сумму четных и количество нечетных чисел.

// наполняю случайными числами массив
$numbers = [];

for ($i = 0; $i <= 50; $i++) {
    $numbers[$i] = mt_rand(1, 100);
}

$sumEven = 0;
$numOdd = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $sumEven += $number;
    }
    if ($number % 2 != 0) {
        $numOdd += 1;
    }
}

//echo "Сумма четных чисел: $sumEven";
//echo '<br>';
//echo "Количество нечетных чисел:  $numOdd";

// 3.  Дано N действительных случайных чисел в диапазоне от 1 до 10.
// Все элементы последовательности, значение которых меньше двух,
// заменить на ноль, кроме того, получить сумму элементов,
// находящихся в диапазоне от 3 до 6, а также подсчитать их количество.

$numbers = [2, 5, 9, 10, 9, 6, 8, 7, 8, 7, 7, 3, 5, 3.3, 3.7, 6.8, 6.55, 7.1, 1.4, 1.7, 0.6];

//for ($i = 0; $i <= 25; $i++) {
//    $numbers[$i] = mt_rand(1, 10);
//}

$sum = 0;
$count = 0;
foreach ($numbers as $i => $number) {
    if ($number < 2) {
        $numbers[$i] = 0;
    }
    if ($number > 3 && $number < 6) {
        $sum += $number;
        $count += 1;
    }
}

//echo json_encode($numbers);


//4. Дан одномерный массив из N действительных случайных чисел в диапазоне от 1 до 50.
// Найти минимальный элемент среди элементов с нечетным индексом и максимальный среди элементов с четным.

$numbers = [];

for ($i = 0; $i <= 5; $i++) {
    $numbers[$i] = mt_rand(1, 50);
}

$min = +INF;
$max = +INF;
foreach ($numbers as $i => $number) {
    if ($i % 2 != 0 && $number < $min) {
        $min = $number;
    }

    if ($i % 2 == 0 && $number > $min) {
        $max = $number;
    }
}

//asort($numbers);
//print_r($numbers);
//var_dump($numbers);
//
//echo $min;
//echo '<br>';
//echo $max;

//5.  Дан одномерный массив из N случайных действительных чисел в диапазоне от -4 до 8 .
// Вывести в порядке невозрастания (убывания) элементы, модуль которых больше 2.

$numbers = [2, 5, 9, 10, 9, 6, 7, 8, 7, 7, 3, 5, 3.3, 3.7, 6.8, 6.55, 7.1, 1.4, 1.7, 0.6, 0, 8, -1, -2, -3, -4, -6.3, -7.1, -1, 1, -5.7];

$resArr = [];
foreach ($numbers as $number) {
    if (abs($number) > 2) {
        $resArr[] = $number;
    }
}
//rsort($resArr);
//print_r($resArr);

//6.  Дан одномерный массив из N случайных действительных чисел в диапазоне от 11 до 22.
// Вывести в порядке невозрастания (убывания) элементы, находящиеся в диапазоне между A и B.

$numbers = [11, 11.1, 11.2, 12, 12.3, 12.4, 13, 13.3, 14, 14.1, 15, 16, 17, 18, 19, 20, 21, 22];

$resArr = [];
foreach ($numbers as $number) {
    if ($number >= 10 && $number <= 20) {
        $resArr[] = $number;
    }
}
//rsort($resArr);
//print_r($resArr);

//1. ЗАДАЧИ НА ЦИКЛ С ПРЕДПРОВЕРКОЙ

//7.	Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от 0 до 50.
// Найти сумму элементов массива, с начала массива, до первого элемента равного нулю

//$numbers = [];
//
//for ($i = 0; $i <= 1000; $i++) {
//    $numbers[$i] = mt_rand(0, 50);
//}

$numbers = [11, 11.1, 0, 11.2, 12, 12.3, 12.4, 13, 13.3, 14, 14.1, 15, 16, 17, 18, 19, 20, 21, 22];

$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
    if ($number == 0) break;
}

//echo $sum;

$sum += $number;
while ($number == 0) break;


//echo $sum;

// 8.	Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от 0 до 9.
// Найти произведение элементов массива, с конца массива до первого элемента, равного нулю.

$numbers = [11, 0, 11.1, 11.2, 12, 12.3, 12.4, 13, 13.3, 14];

//1
$res = 1;
for ($i = count($numbers) - 1; $i >= 0; $i--) {
    if ($numbers[$i] == 0) break;

    $res *= $numbers[$i];
}

//2
for ($i = count($numbers) - 1; $i >= 0 && $numbers[$i] >= 0; $i--) {
    $res *= $numbers[$i];
}

//echo $res;

//1
while ($i >= count($numbers) - 1) {
    if ($numbers[$i] >= 0) break;

    $res += $numbers[$i];
    $i--;
}

//2
$i = count($numbers) - 1;
while ($i >= 0 && $numbers[$i] >= 0) {

    $res += $numbers[$i];
    $i--;
}

//echo $res;

//9.	Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от -5 до 50.
// Найти сумму элементов массива, с конца массива, до первого отрицательного элемента.

$numbers = [11, 11.1, 0, 11.2, -12, 12.3, -12.4, 13, 13.3, 14, -14.1, -15, 16, 17, 18, 19, 20, 21, 22];

$sum = 0;
for ($i = count($numbers) - 1; $i >= 0; $i--) {
    if ($numbers[$i] < 0) break;

    $sum += $numbers[$i];
}

//echo $sum;

$i = count($numbers) - 1;
while ($i >= 0 && $numbers[$i] >= 0) {

    $sum += $numbers[$i];
    $i--;
}

//echo $sum;

//10.	Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от 1 до 50.
// Определить, сколько элементов с начала массива нужно сложить, чтобы сумма превысила заданное значение.

$numbers = [11, 11.1, 1, 11.2, 12, 12.3, 12.4, 13, 13.3, 14, 14.1, 15, 16, 17, 18, 19, 20, 21, 22, 50];

$var = 200;
$count = 0;
$sum = 0;

foreach ($numbers as $number) {
    $sum += $number;
    $count += 1;
    if ($sum > $var) break;
}

//echo "Количество элементов $count";

//11.	Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от 1 до 10.
//Определить, сколько элементов с конца массива нужно перемножить, чтобы произведение превысило заданное значение.

$numbers = [11, 11.1, 1, 11.2, 12, 12.3, 12.4, 13, 13.3, 14, 14.1, 15, 16, 17, 18, 19, 20, 21, 22, 50];

$rundVar = 1000000000;
$count = 0;
$mult = 1;

for ($i = count($numbers) - 1; $i >= 0; $i--) {
    $mult *= $number;
    $count += 1;

    if ($mult > $rundVar) break;
}

//echo $count;

//12.	Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от -5 до 8.
//Найти сумму элементов участка массива, начиная с первого положительного и кончая вторым положительным элементом.

$numbers = [-5, -4, -3, -2, -1, 0, 5, -2, 3, 4, 5, 6, 7, 8];

$count = 0;
$sum = 0;

foreach ($numbers as $i => $number) {
    if ($number > 0) {
        $count++;
    }
    if ($count >= 1 && $count <= 2) {
        $sum += $number;
    }
    if ($count > 2) {
        break;
    }
}

//echo $sum;

// Дан двумерный массив из 5 строк и 6 столбцов.
// Определить для каждого столбца максимальный элемент.
// Среди этих элементов найти минимальный

$arr = [
    [-1, -2, -4, -7, -4, -4],
    [-3, 5, 56, 7, 6, 8],
    [-4, 5, 6, 7, 8, 10],
    [-433, 45, 10000, 23, 56, 10],
    [-67, 56, 78, 789, 45, 9]
];

//1

$max = [-INF, -INF, -INF, -INF, -INF];

foreach ($arr as  $valueArr){
    foreach ($valueArr as $i => $number) {
        if($valueArr[$i] > $max[$i]){
            $max[$i] = $number;
        }
    }
}

echo json_encode($max);

//2

$min = -INF;

foreach ($max as $number){
    if($number > $min){
        $min = $number;
    }
}

echo $min;




