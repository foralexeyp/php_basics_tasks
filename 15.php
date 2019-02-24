<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>15</title>
</head>
<body>

</body>
</html>

<p>15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. <br>
    Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).<br>
    На экран выводить результат в зависимости от значений этих переменных. <br>
    Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
</p>

<?php
$a = 7;
$b = 0;
$operator = '/';

if ($operator == '+') {
    $result = $a+$b;
}
elseif ($operator == '-') {
    $result = $a - $b;
}
elseif ($operator == '*') {
    $result = $a * $b;
}
elseif ($operator == '%') {
    $result = $a % $b;
}
elseif ($b !== 0 && $operator == '/') {
    $result = $a / $b;
}
else {
    echo 'ошибка, на 0 делить нельзя';
}



echo $result;




