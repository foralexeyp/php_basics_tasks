<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>14</title>
</head>
<body>

</body>
</html>

<p>14. Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10.<br>
    Вывести число 10, используя только переменную $foo (не опечатка).</p>

<?php
$foo = 'bar';
$bar = 10;
echo $$foo;