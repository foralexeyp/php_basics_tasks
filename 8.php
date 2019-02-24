<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>8</title>
</head>
<body>

</body>
</html>

<p>8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, <br>
    что значение переменной age является отрицательным числом, или вовсе числом не является.</p>

<?php
$age = 20;
if (!is_int($age) || $age < 0){
    echo 'Неизвестный возраст';
}
elseif ($age >= 18 && $age <= 59) {
    echo 'Вам еще работать и работать';
}
elseif ($age >= 59) {
    echo 'Вам пора на пенсию';
}
elseif ($age >= 0 && $age <= 17) {
    echo 'Вам еще рано работать';
}

echo '<br>';
