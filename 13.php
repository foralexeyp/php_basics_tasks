<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>13</title>
</head>
<body>

</body>
</html>

<p>13. Заданы две переменные: s - длина участка, который проехал автомобиль; <br>
    t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.</p>

<?php
$s = 135;
$t = 3;

$speedKmH = $s / $t;
$speedMS = (135*1000)/(3*3600);
echo "$speedKmH км/ч";
echo '<br>';
echo "$speedMS м/с";