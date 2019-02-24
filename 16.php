<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>16</title>
</head>
<body>

</body>
</html>

<p>16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.</p>

<?php
$a = -34;
$b = 34;
if ($a == $b){
    echo 'Числа равны';
}
elseif ($a > $b) {
    echo $a;
}
else {
    echo $b;
}