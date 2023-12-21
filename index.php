<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Високосные года</title>
    <style>
    </style>
</head>
<body>
    <ol>
    <?php           
    $day_ru = [ //Массив для локализации названий дней недели
        "Monday" => "понедельник",
        "Tuesday" => "вторник",
        "Wednesday" => "среда",
        "Thursday" => "четверг",
        "Friday" => "пятница",
        "Saturday" => "суббота",
        "Sunday" => "воскресенье"
    ];

    foreach (range(1980,2035) as $year) {
        if (date("L", mktime(0, 0, 0, 1, 1, $year)) == 1) { //"L" содержит 1 если год високосный
            $leap_date = date("Y год, d февраля - l", mktime(0, 0, 0, 2, 29, $year));
            $leap_date = str_replace(array_keys($day_ru), array_values($day_ru), $leap_date); //Замена названий дней недели
            echo "<li>$leap_date</li>";
        }
    }
    ?>
    </ol>
</body>
</html>