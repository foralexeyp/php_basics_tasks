<?php
$age = 46;
if ($age < 0 || !is_integer($age)) {
    echo 'Неизвестный возраст';
}
elseif ($age >= 18) {
    echo 'Вам еще работать и работать';
}
elseif ($age >= 59) {
    echo 'Вам пора на пенсию';
}
elseif ($age >= 0 && $age <= 17) {
    echo 'Вам еще рано работать';
}
