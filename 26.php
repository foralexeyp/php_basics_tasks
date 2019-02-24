<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>26</title>
</head>
<body>

</body>
</html>

<p>26. Объявите константу DAYS_COUNT равную 7 <br>
    и константу MONTH_COUNT равную 12 двумя разными способами объявления констант.</p>

<?php
define("DAYS_CONST", 7);
echo DAYS_CONST;
echo '<br>';

const MONTH_COUNT = 12;
echo MONTH_COUNT;
//echo constant('MONTH_COUNT');
