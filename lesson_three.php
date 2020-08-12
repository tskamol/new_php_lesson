<?php
// Первое задание
$a=0;
while($a++ < 100)
    if($a%3==0)
        echo $a . ' ';

// Второе задание
echo '<br>';
$i = -1;
do
{
    $i++;
    if ($i == 0)
    {
        echo $i . ' - Это ноль' . '<br>';
    }
    else
    {
        if ($i%2 == 0)
        {
            echo $i . ' - Четное число' . '<br>';
        }
        else
        {
            echo $i . ' - Нечетное число' . '<br>';
        }
    }
}
while ($i <= 9);

//Третье задание

$cityMass = [
    'Московская область' =>[
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт',
    ]
];

foreach ($cityMass as $key => $value) {
    echo "<hr>{$key}<hr>";
    foreach ($value as $keyRole => $key) {
        echo "$key, ";
    }

}


// Четвертое задание

function trans (string $str) : string {

    $arr = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',

        'г' => 'g',   'д' => 'd',   'е' => 'e',

        'ё' => 'yo',   'ж' => 'zh',  'з' => 'z',

        'и' => 'i',   'й' => 'j',   'к' => 'k',

        'л' => 'l',   'м' => 'm',   'н' => 'n',

        'о' => 'o',   'п' => 'p',   'р' => 'r',

        'с' => 's',   'т' => 't',   'у' => 'u',

        'ф' => 'f',   'х' => 'x',   'ц' => 'c',

        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'shh',

        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'\'',

        'э' => 'e\'',   'ю' => 'yu',  'я' => 'ya',


        'А' => 'A',   'Б' => 'B',   'В' => 'V',

        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',

        'Ё' => 'YO',   'Ж' => 'Zh',  'З' => 'Z',

        'И' => 'I',   'Й' => 'J',   'К' => 'K',

        'Л' => 'L',   'М' => 'M',   'Н' => 'N',

        'О' => 'O',   'П' => 'P',   'Р' => 'R',

        'С' => 'S',   'Т' => 'T',   'У' => 'U',

        'Ф' => 'F',   'Х' => 'X',   'Ц' => 'C',

        'Ч' => 'CH',  'Ш' => 'SH',  'Щ' => 'SHH',

        'Ь' => '\'',  'Ы' => 'Y\'',   'Ъ' => '\'\'',

        'Э' => 'E\'',   'Ю' => 'YU',  'Я' => 'YA',

    ];
    $res = '';

    for($i = 0; $i < mb_strlen($str); $i++) {

        $res .= $arr[mb_substr($str, $i, 1)];
    }

    return $res;
}
echo "<hr>" . trans('Привет');

//Пятое задание

//$str = '<hr><h2>Тест функции</h2>';
function rep ($str) {
    $res = str_replace(" ", "_", $str);
    return $res;
}
echo "<hr>" . rep('Тест функции задание 5');

// Седьмое задание

for ($i = 0; print $i, $i++ < 9;){

};
// шестое задание
$menu = [
    'Main',
    'Contact',
    'Catalog'
];

$title = 'Обучение PHP';
$h1 = 'GB обучение PHP';
$date = date("Y");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<br>
<?=$title?>
<br>
<?=$date?>
<br>
<?=$h1?>
<ul>
    <?php foreach ($menu as $item): ?>
        <li><?=$item?></li>
    <? endforeach;?>
</ul>
</body>
</html>


