<?php
$title = 'Обучение PHP';
$h1 = 'GB обучение PHP';
$date = date("Y");

$html = <<<php
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{$title}</title>
        <h1>H1 заголовок:{$h1}</h1>
        <p>Год: {$date}</p>
        
    </head>
    <body>
     <footer>
     <p>Copyright © {$date}</p>
     </footer>
    </body>
    </html>

php;
echo $html
?>


<?php
//
//$a = 5;
//$b = '05';
//var_dump($a == $b); // PHP приводит значение к числу, 05 такого числа нет, 0 опускается и получается 5
//
//var_dump((int)'012345'); // Целое число не может начинаться с 0 без запятой. Поэтому php приводит значение к целому числу
//
//var_dump((float)123.0 === (int)123.0); // float приводит к строке, int приводит к числу, от сюда получается false.
//
//var_dump((int)0 === (int)'hello, world'); // Приводит к типу числа
//
//
$a = 1;
$b = 2;

$b = $b - $a;
$a = $b + $a;

echo "<br>переменная B = " . $b;

echo "<br>переменная A = " . $a;

?>

