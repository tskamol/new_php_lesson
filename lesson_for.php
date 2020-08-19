<?php
$photo = scandir('bmw/');
// Логирование в файл

define(DIR_LOGS, 'logs');

function logs () {
//$file = fopen('test.log', 'a');
$date = date('Y-m-d H:i:s');
//fwrite($file,"$date\n");
    file_put_contents(DIR_LOGS . '/log.txt', $date . "\r\n", FILE_APPEND);


$file_arr = file(DIR_LOGS . "/log.txt");
$lines = count($file_arr);

if($lines>=10){
   $dir = __DIR__ . '/' . DIR_LOGS . '/';
   $count = count(scandir($dir)) - 2;
   rename($dir . 'log.txt', $dir . 'log' . $count . '.txt');
}

}
logs();

// Написать функцию получения всех папок и файлов директории.
$dire = scandir('.');
var_dump($dire);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
foreach ($photo as $value) {

    echo "<a href='bmw/$value'> <img src='bmw/$value' style='width: 400px'></a>" ;
}

$uploads_dir = 'bmw/';
$uploadfile = $uploads_dir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл загружен";}
?>
<form enctype="multipart/form-data"  method="POST">
    <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>

</body>
</html>