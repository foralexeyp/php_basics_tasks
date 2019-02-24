<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>12</title>
</head>
<body>

</body>
</html>

<p>12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day <br>
    не попадает в диапазон чисел от 1 до 7 (включительно).</p>

<?php
$day = 13;
switch ($day) {
    case 1 :
        echo 'Это рабочий день';
        break;
    case 2 :
        echo 'Это рабочий день';
        break;
    case 3 :
        echo 'Это рабочий день';
        break;
    case 4 :
        echo 'Это рабочий день';
        break;
    case 5 :
        echo 'Это рабочий день';
        break;
    case 6 :
        echo 'Это выходной день';
        break;
    case 7 :
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}