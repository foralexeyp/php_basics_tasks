<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>19</title>
</head>
<body>

</body>
</html>

<p>19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.</p>

<?php
$a = '78';
$b = 78;
if ($a == $b) {
    echo 'равны';
}
else   {
    echo 'не равны';
}
echo '<br>';
var_dump($a);
echo '<br>';
var_dump($b);