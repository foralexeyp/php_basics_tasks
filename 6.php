<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>6</title>
</head>
<body>

</body>
</html>
<p>6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, <br>
    что значение переменной age больше 59.</p>

<?php
    $age = 20;
    if ($age >= 18 && $age <= 59) {
        echo 'Вам еще работать и работать';
    }
    elseif ($age > 59) {
        echo 'Вам пора на пенсию';
    }