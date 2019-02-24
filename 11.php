<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>11</title>
</head>
<body>

</body>
</html>

<p>11. С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной day <br>
    попадает в диапазон чисел от 6 до 7 (включительно).</p>

<?php
$day = 6;
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
}