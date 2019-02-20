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




